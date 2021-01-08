<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('demo')) {

    function demo($name) {
        /* Function for load sickness */
        switch ($name) {
            /* Function for load physical_disability */
            case 'sickness':
                $data = ['id' => 'sickness',
                    'title' => 'Sickness',
                    'flag' => 1,
                    'result' => 'sickness'];
                break;
            /* Function for load physical_disability */
            case 'physical':
                $data = ['id' => 'physical',
                    'title' => 'Physical Disability',
                    'flag' => 1,
                    'result' => 'physical_disability'];
                break;
            /* Function for load learning_disability */
            case 'learning':
                $data = ['id' => 'learning',
                    'title' => 'Learning Disability',
                    'flag' => 1,
                    'result' => 'leanrning_disability'];
                break;
            /* Function for load strength */
            case 'strength':
                $data = ['id' => 'strength',
                    'title' => 'Areas of Strength',
                    'flag' => 1,
                    'result' => 'strengths'];
                break;
            /* Function for load weakness */
            case 'weakness':
                $data = ['id' => 'weakness',
                    'title' => 'Areas of weakness',
                    'flag' => 1,
                    'result' => 'weakness'];
                break;
            /* Function for load job/profession */
            case 'jobProfession':
                $data = ['id' => 'jobProfession',
                    'title' => 'Job/Profession',
                    'flag' => 1,
                    'result' => 'job_profession'];
                break;
        }






        /* Function for load job/title */
        $data['id'] = "jobTitle";
        $data['title'] = 'Job Title';
        $data['flag'] = 1;
        $data['result'] = 'job_title';

        /* Function for load learning_disability */

        $data['id'] = 'hobbies';
        $data['title'] = 'Hobbies';
        $data['flag'] = 1;
        $data['result'] = 'hobbies';



        /* Function for load subjects */
        $data['id'] = 'subjects';
        $data['title'] = 'Special Subjects';
        $data['flag'] = 1;
        $data['result'] = 'subjects';


        /* Function for load learning_disability */

        $data['id'] = "activities";
        $data['title'] = 'Other Activities';
        $data['flag'] = 1;
        $data['result'] = 'activities';


        /* Function for load qualifications */

        $data['id'] = "qualifications";
        $data['title'] = 'Degree';
        $data['flag'] = 1;
        $data['result'] = 'qualifications';


        /* Function for load ugqualifications */

        $data['id'] = "ugqualifications";
        $data['title'] = 'UG Qualification';
        $data['flag'] = 1;
        $data['result'] = 'ug_qualification';


        /* Function for load pgqualifications */

        $data['id'] = "pgqualifications";
        $data['title'] = 'PG Qualification';
        $data['flag'] = 1;
        $data['result'] = 'pg_qualification';

        /* Function for load phdqualifications */

        $data['id'] = "phdqualifications";
        $data['title'] = 'PHD Qualification';
        $data['flag'] = 1;
        $data['result'] = 'phd_qualification';


        return $data;
    }

    if (!function_exists('language')) {

        function language($lng) {
            $lng = (int) $lng;
            $language = array(
                0 => 'English',
                1 => 'English',
                2 => 'Marathi',
                3 => 'Hindi',
                4 => 'Gujrathi',
                5 => 'Kannada',
            );
            return $language[$lng];
        }

    }
}