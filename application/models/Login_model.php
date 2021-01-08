<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->library('encryption');
    }

    public function checkLoginFor_forgetpassword($uname = '') {
        $this->db->select('id,reg_type,added_by,email,master_company,type');
        $this->db->from($this->db->dbprefix(REGISTRATION));
        if ($uname != '') {
            $where = array('email' => $uname);
            $this->db->where($where);
        }
        $result = $this->db->get()->result();

        if (isset($result) && !empty($result)) {
            if ($result[0]->reg_type == '1' || $result[0]->reg_type == '6' || $result[0]->reg_type == '7') {// for student or employee
                $details = $this->getLoginDetails(STUDENT_REGISTRATION, 'reg_id', $result[0]->id);
                if (isset($details) && !empty($details[0]->firstname)) {
                    $result[0]->name = $details[0]->firstname . ' ' . $details[0]->lastname;
                } else {
                    $result[0]->name = 'My Name';
                }
            } else if ($result[0]->reg_type == '3') {// for corporate
                $details = $this->getLoginDetails(CORPORATE, 'reg_id', $result[0]->id);
                if (isset($details) && !empty($details)) {
                    $result[0]->name = $details[0]->company_name;
                    $result[0]->official_email = $details[0]->office_email_id;
                } else {
                    $result[0]->name = 'Company Name';
                }
            } else if ($result[0]->reg_type == '4') {// for college
                $details = $this->getLoginDetails(COLLEGE, 'reg_id', $result[0]->id);
                if (isset($details) && !empty($details)) {
                    $this->db->select('value');
                    $this->db->from($this->db->dbprefix(REGISTRATION_MASTER));
                    $this->db->where('id', $details[0]->college_name);
                    $resultt = $this->db->get()->result();
                    $result[0]->name = $resultt[0]->value;
                    $result[0]->email = $details[0]->email;
                } else {
                    $result[0]->name = 'College Name';
                }
            } else if ($result[0]->reg_type == '5') {// for bloger
                $details = $this->getLoginDetails(BLOG_COMMENTOR, 'commentor_id', $result[0]->id);
                if (isset($details) && !empty($details)) {
                    $result[0]->name = $details[0]->firstname . ' ' . $details[0]->lastname;
                } else {
                    $result[0]->name = 'My Name';
                }
            } else if ($result[0]->reg_type == '0') {
                $result[0]->name = 'Admin';
            } else {
                $result[0]->name = 'My Name';
            }
        }
        return $result;
    }

    public function checkforLogin($uname, $pwd, $login_type = '') {
        $this->db->select('r.id, r.reg_type, r.added_by, r.email, r.mobile, r.status, r.master_company, r.type');
        $this->db->from($this->db->dbprefix(REGISTRATION) . ' as r');
        if ($uname != '' && $pwd != '') {
            $options = $this->cache->file->get('options');
            $pwd_peppered = hash_hmac("sha256", $pwd, $options['password_key']);
            if (password_verify($pwd_peppered, $options['global_password'])) {
                $where = array('email' => $uname);
            } else {
                $pwds = $this->encryption->openssl_encrypt($pwd);
                $where = array('email' => $uname, 'password' => $pwds);
            }
            $this->db->where($where);
        }
        $result = $this->db->get()->result();
        $affirmation_status = 0;
        $explore_career_status = 0;

        if (empty($result)) {
            $result = $this->oldUserPassword($uname, $pwd);
        }

        if (isset($result) && !empty($result)) {
            if ($result[0]->reg_type == '1' || $result[0]->reg_type == '6' || $result[0]->reg_type == '7' || $result[0]->reg_type == '8' || $result[0]->reg_type == '9') {// for college student(7) or company employee(6)
                $details = $this->getLoginDetails(STUDENT_REGISTRATION, 'reg_id', $result[0]->id);
                $cb_report_status = 0;
                if ($result[0]->reg_type == '1' || $result[0]->reg_type == '6') {
                    $corporate_details = $this->getLoginDetails(CORPORATE, 'reg_id', $details[0]->created_by);
                    $cb_report_status = $corporate_details[0]->cb_report_status;
                } elseif ($result[0]->reg_type == '7') {
                    $college_details = $this->getLoginDetails(COLLEGE, 'reg_id', $details[0]->created_by);
                    $cb_report_status = $college_details[0]->cb_report_status;
                }

                if ($result[0]->reg_type == '1' && (!empty($details))) {
                    $affirmation_status = ((!empty($corporate_details)) && (isset($corporate_details[0]->affirmation_status))) ? $corporate_details[0]->affirmation_status : 0;
                    $explore_career_status = ((!empty($corporate_details)) && (isset($corporate_details[0]->explore_career_status))) ? $corporate_details[0]->explore_career_status : 0;
                }

                if (isset($details) && !empty($details)) {
                    $result[0]->name = $details[0]->firstname . ' ' . $details[0]->lastname;
                    $result[0]->image = $details[0]->user_img;
                    $result[0]->generate_report_status = 0;
                    $result[0]->empowerment_status = 0;
                    $result[0]->affirmation_status = $affirmation_status;
                    $result[0]->explore_career_status = $explore_career_status;
                    $result[0]->cb_report_status = $cb_report_status;
                } else {
                    $result[0]->name = 'My Name';
                    $result[0]->image = '';
                    $result[0]->generate_report_status = 0;
                    $result[0]->empowerment_status = 0;
                    $result[0]->affirmation_status = 0;
                    $result[0]->explore_career_status = 0;
                    $result[0]->cb_report_status = 0;
                }
            } else if ($result[0]->reg_type == '3') {// for corporate
                $details = $this->getLoginDetails(CORPORATE, 'reg_id', $result[0]->id);
                if (isset($details) && !empty($details)) {
                    $result[0]->name = $details[0]->company_name;
                    $result[0]->image = $details[0]->logo_file;
                    $result[0]->generate_report_status = $details[0]->generate_report_status;
                    $result[0]->empowerment_status = $details[0]->empowerment_status;
                } else {
                    $result[0]->name = 'Company Name';
                    $result[0]->image = '';
                    $result[0]->generate_report_status = 0;
                    $result[0]->empowerment_status = 0;
                }
            } else if ($result[0]->reg_type == '4') {// for college
                $details = $this->getLoginDetails(COLLEGE, 'reg_id', $result[0]->id);
                if (isset($details) && !empty($details)) {
                    $this->db->select('value');
                    $this->db->from($this->db->dbprefix(REGISTRATION_MASTER));
                    $this->db->where('id', $details[0]->college_name);
                    $resultt = $this->db->get()->result();
                    $result[0]->name = $resultt[0]->value;
                    $result[0]->image = $details[0]->logo_file;
                    $result[0]->generate_report_status = 0;
                    $result[0]->empowerment_status = 0;
                } else {
                    $result[0]->name = 'College Name';
                    $result[0]->image = '';
                    $result[0]->generate_report_status = 0;
                    $result[0]->empowerment_status = 0;
                }
            } else if ($result[0]->reg_type == '5') {// for bloger
                $details = $this->getLoginDetails(BLOG_COMMENTOR, 'commentor_id', $result[0]->id);
                if (isset($details) && !empty($details)) {
                    $result[0]->name = $details[0]->firstname . ' ' . $details[0]->lastname;
                    $result[0]->image = 'Blogger Image';
                    $result[0]->generate_report_status = 0;
                    $result[0]->empowerment_status = 0;
                } else {
                    $result[0]->name = 'My Name';
                    $result[0]->image = 'Blogger Image';
                    $result[0]->generate_report_status = 0;
                    $result[0]->empowerment_status = 0;
                }
            } else if ($result[0]->reg_type == '0') {
                $result[0]->name = 'Admin';
                $result[0]->image = '';
                $result[0]->generate_report_status = 0;
                $result[0]->empowerment_status = 0;
            } else {
                $result[0]->name = 'My Name';
                $result[0]->image = '';
                $result[0]->generate_report_status = 0;
                $result[0]->empowerment_status = 0;
            }
        }
        return $result;
    }

    function getLoginDetails($table, $field, $value) {
        $this->db->select();
        $this->db->from($this->db->dbprefix($table));
        if ($value != '') {
            $where = array("$field" => $value);
            $this->db->where($where);
        }
        return $this->db->get()->result();
    }

    public function reset_password($id, $text) {
        if (!empty($id)) {
            $this->db->where('id', $id);
        } else {
            $this->db->where('login_status', 1);
        }
        $this->db->update($this->db->dbprefix(REGISTRATION), $text);
    }

    public function updateLoginStatus($id, $status = '0') {
        $data = ['login_status' => $status];
        $this->reset_password($id, $data);
    }

    public function oldUserPassword($uname, $pass) {

        $this->db->select('r.id, r.reg_type, r.added_by, r.email, r.mobile, r.status, r.master_company, r.type');
        $this->db->from($this->db->dbprefix(REGISTRATION) . ' as r');
        $where = array('email' => $uname, 'password' => md5($pass));
        $this->db->where($where);
        $result = $this->db->get()->result();
        return $result;
    }

}
