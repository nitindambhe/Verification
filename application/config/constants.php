<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  |--------------------------------------------------------------------------
  | Display Debug backtrace
  |--------------------------------------------------------------------------
  |
  | If set to TRUE, a backtrace will be displayed along with php errors. If
  | error_reporting is disabled, the backtrace will not display, regardless
  | of this setting
  |
 */
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
  |--------------------------------------------------------------------------
  | File and Directory Modes
  |--------------------------------------------------------------------------
  |
  | These prefs are used when checking and setting modes when working
  | with the file system.  The defaults are fine on servers with proper
  | security, but you may wish (or even need) to change the values in
  | certain environments (Apache running a separate process for each
  | user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
  | always be used to set the mode correctly.
  |
 */
defined('FILE_READ_MODE') OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE') OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE') OR define('DIR_WRITE_MODE', 0755);

/*
  |--------------------------------------------------------------------------
  | File Stream Modes
  |--------------------------------------------------------------------------
  |
  | These modes are used when working with fopen()/popen()
  |
 */
defined('FOPEN_READ') OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE') OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE') OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESCTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE') OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE') OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT') OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT') OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
  |--------------------------------------------------------------------------
  | Exit Status Codes
  |--------------------------------------------------------------------------
  |
  | Used to indicate the conditions under which the script is exit()ing.
  | While there is no universal standard for error codes, there are some
  | broad conventions.  Three such conventions are mentioned below, for
  | those who wish to make use of them.  The CodeIgniter defaults were
  | chosen for the least overlap with these conventions, while still
  | leaving room for others to be defined in future versions and user
  | applications.
  |
  | The three main conventions used for determining exit status codes
  | are as follows:
  |
  |    Standard C/C++ Library (stdlibc):
  |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
  |       (This link also contains other GNU-specific conventions)
  |    BSD sysexits.h:
  |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
  |    Bash scripting:
  |       http://tldp.org/LDP/abs/html/exitcodes.html
  |
 */
defined('EXIT_SUCCESS') OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR') OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG') OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE') OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS') OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT') OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE') OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN') OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX') OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/* Tables constant names */
set_time_limit(0);
ini_set('mysql.connect_timeout', '0');
ini_set('max_execution_time', '0');
ini_set('error_log', FCPATH . 'application/logs/debug.log');
define('K_PATH_IMAGES', FCPATH . 'images/');
$path = dirname(__FILE__);
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
define('IMAGE_PATH', 'C:\xampp\htdocs\nitin\images');
//define('IMAGE_PATH', str_replace('application/config', 'images/', $path));
define('REPORT_PATH', FCPATH . 'reports/');
define('IMAGE_UPLOAD_PATH', FCPATH . 'images/');
define('EVALUATION_REPORT_PATH', FCPATH . 'evaluation_reports/');
define('ZIPREPORT_PATH', FCPATH . 'zipreports/');
define('ZIPREPORT_PATH_EVALUATION', FCPATH . 'zip_evaluation_reports/');
define('REPORT_IMAGE_PATH', FCPATH . 'application/images');
define('REPORT_HOST_PATH', $protocol . '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '' ) . '/FIT/reports/');
define('IMAGE_HTTP_PATH', $protocol . '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '' ));
define('EVALUATION_REPORT_HOST_PATH', $protocol . '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '' ) . '/FIT/evaluation_reports/');
define('ZIPREPORT_HOST_PATH', $protocol . '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '' ) . '/FIT/zipreports/');
define('MI_CATEGORY', 'mi_category');
define('MI_STUDENTMMARK', 'mi_studentmmark');
define('AGE_GROUP', 'age_group');
define('DIMENSION_MAPPING', 'dimension_mapping');
define('DIMENSION', 'dimension');
define('DIMENSION_RANGE', 'dimension_range');
define('STEN_PERCENTAGE', 'sten_percentage');
define('SUB_DIMENSION', 'sub_dimension');
define('TEST_TYPE', 'test_type');
define('TESTS', 'tests');
define('TESTS_INSTRUCTION', 'test_instruction');
define('QUESTIONS', 'questions');
define('STREAM', 'stream');
define('TEST_DIMENSIONS', 'test_dimensions');
define('MAPPING_QUESTION', 'mapping_question');
define('QUESTION_IMAGE_PATH_TEST', 'application/images/question_images/tt');
define('QUESTION_IMAGE_PATH', 'application/images/question_images');
define('ANSWER_IMAGE_PATH', 'application/images/answer_images');
define('USER_IMAGE_PATH', 'application/images/user_images');
define('STUDENT_AUDIO_PATH', 'application/students_audio');
define('COMPANY_LOGO', FCPATH . 'images/company_logo');
define('COMPANY_MOBILE_LOGO', FCPATH . 'images/company_logo/mobile_logo');
define('COLLEGE_MOBILE_LOGO', FCPATH . 'images/college_logo/mobile_logo');
define('COLLEGE_LOGO', FCPATH . 'images/college_logo');
define('RESUME_UPLOAD', FCPATH . 'Resume_upload');
define('COMPANY_HEADER_LOGO', 'images/company_logo');
define('COLLEGE_HEADER_LOGO', 'images/college_logo');
define('COMPANY_LOGO_PATH', $protocol . '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '' ) . '/FIT/images/company_logo');
define('COMPANY_MOBILE_LOGO_PATH', $protocol . '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '' ) . '/FIT/images/company_logo/mobile_logo');
define('COLLEGE_LOGO_PATH', $protocol . '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '' ) . '/FIT/images/college_logo');
define('COLLEGE_MOBILE_LOGO_PATH', $protocol . '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '' ) . '/FIT/images/college_logo/mobile_logo');
define('ATTEMPTED_TESTS', 'attempted_tests');
define('ATTEMPTED_TESTS_SCORE', 'attempted_tests_score');
define('PROFILER', 'profiler');
define('PROFILER_WEIGHTAGE', 'profiler_weightage');
define('CAREER_DIMENSION', 'career_dimension');
define('PATHWAY_CAREERS', 'pathway_related_careers');
define('STUDENT_REGISTRATION', 'student_registration');
define('REGISTRATION_MASTER', 'registration_master');
define('PROFILER_TEST_TYPES', 'profiler_test_types');
define('PROJECT_DETAIL', 'project_detail');
define('COMPANY_EXPERIENCE', 'company_experience');
define('COMPETENCIES', 'competencies');
define('TEST_REPORTS', 'test_reports');
define('STATE', 'state');
define('CITY', 'city');
define('FUNCTIONAL_AREA', 'functional_area');
define('JOB_ROLE', 'job_role');
define('POST_JOB', 'post_job');
define('APPLY_JOB', 'apply_job');
define('REPORT_GENERATE_JOB', 'report_generate_cron_job');
define('LOGGER', 'logger');
define('COUNTRY', 'country');
define('DATA_LODING_SPINNER', 'application/images/data_loader.gif');
define('CORPORATE', 'corporate_registration');
define('COLLEGE', 'college_registration');
define('LOGIN_IMAGE', 'application/images/mi-intelligence.png');
define('COMPETECY_CHALLENGE', 'competencies_challenges');
define('REGISTRATION', 'registration');
define('TESTS_DIMENSION_SCORE', 'test_dimension_score');
define('TESTS_DIMENSION_SCORE_NEW', 'test_dimension_score_new');
define('CORPORATE_CANDIDATES', 'corporate_candidates');
define('BLOG_COMMENTOR', 'blog_commentor');
define('STUDENT_CAREER_SCORE', 'student_career_score');
define('PERSON_CAREER', 'person_career');
define('CLUSTER', 'careers_cluster');
define('PATHWAY_RELATED_CLUSTER', 'pathway_related_careers_cluster');
define('CAREER', 'careers');
define('TIME_SLOTS', 'time_slots');
define('TEST_TIMETABLE', 'test_timetable');
define('COUNSELLOR_REGISTRATION', 'counsellor_registration');
define('COUNSELLOR_STUDENT', 'counsellor_student');
define('UPLOADED_EXCEL_INFO_DATA', 'uploded_excel');
define('UPLOADED_EXCEL_Q', 'q_excel');
define('UPLOADED_EXCEL_QUE', 'questions_new');
define('UPLOADED_EXCEL_INFO', 'documents/mapping_excel');
define('MAPPING_EXCEL', 'documents/mapping_excel');
define('UPLOADED_EVAL_STUDENT_EXCEL_INFO', 'documents/mapping_eval_student_excel');
define('MAPPING_EVAL_STUDENT_EXCEL', 'documents/mapping_eval_student_excel');
define('MAPPING_STUDENT_EXCEL', 'documents/mapping_student_excel');
define('CAREER_WEIGHTAGE', 'careers_weightage');
define('PERSON_CAREER_REASON', 'person_career_choicereason');
define('PERSON_CAREER_NOTE', 'person_career_notes');
define('LIFESKILL', 'life_skill');
define('PERSONS_LIFESKILL', 'person_lifeskills');
define('BANK_LIST', 'bank_list');
define('COMPANY_TRANSACTION', 'company_transaction');
define('WALLET_AMOUNT', '-1');
define('INVOICE', 'invoice');
define('TEST_OBSERVATION', 'test_observation');
define('REPORT_TEST_TYPE_CONFIGURATION', 'report_test_type_configuration');
define('REPORT_DIMENSION_CONFIGURATION', 'report_dimension_configuration');
define('REPORT_SUBDIMENSION_CONFIGURATION', 'report_subdimension_configuration');
define('DATA_BACKUP', 'data_backup');
define('CODE_BACKUP', FCPATH . 'backup/code_backup/');
define('DB_BACKUP', FCPATH . 'backup/db_backup/');
define('EVALUATION_DEPT', 'evaluation_department');
define('EVALUATION_TYPE', 'evaluation');
define('EVALUATION_CATEGORY', 'evaluation_category');
define('EVALUATION_QUESTION', 'evaluation_question');
define('EVALUATION_ROLE', 'evaluation_role');
define('EVALUATION_LEVEL', 'level');
define('LANGUAGES', 'languages');
define('LANGUAGE', 'language');
define('PERFORMANCE_EVALUATION', 'performance_evaluation');
define('QUESTION_FOR_EVALUATION', 'question_for_evalauation');
define('EVALUATION_RATING', 'evaluation_rating');
define('PERFORMANCE_EVALUATION_REPORT', 'performance_evaluation_report');
define('EVALUATION_WEIGHTAGE', 'evaluation_weightage');
define('PERIOD', 'evaluation_period');
define('FEEDBACK', 'evaluation_feedback');
define('COMPANY_CLIENTS', 'company_clients');
define('EVALUATION_SMS', 'evaluation_sms');
define('SURVEY_RATING_QUESTIONS', 'survey_rating_questions');
define('EVALUATION_ORDER_FLAG', 'evaluation_order_flag');
define('CLIENT_PROJECT', 'client_project');
define('SURVEY_MASTER', 'survey_master');
define('COMPANY_DEPT', 'company_department');
define('MOBILE_AUTHENTICATION', 'mobile_authentication');
define('OPTIONS', 'options');
define('PDF_NEW_CONTENT', 1);
define('ENCRYPT_METHOD', 'AES-256-CBC');
define('SECRET_KEY', 'EC31DDF3219933558432FE3890BC6F27400F5BDA1271D9AC');
define('SECRET_IV', '220E5186C6AF6FD8E8CDE5F9AD137DA8');
define('REPORT_TEST_TYPE_IMAGES', json_encode(array('3' => IMAGE_HTTP_PATH . '/images/intelligence.png')));
define('PSYCHOLOGIST_STUDENT', 'psychologist_student');
define('TO_EMAIL', "talentmatdev@gmail.com");
define('FROM_EMAIL', "findyourfitc2c@gmail.com");
define('FROM_NAME', "Find Your Fit");
define('CC_EMAIL', "fyfconnect@gmail.com");
define('CC_NAME', "TalentMAT");
define('BCC_EMAIL', "talentmat@gmail.com");
define('BCC_NAME', "TalentMAT");
define('HOST_URL', "www.findyourfit.in");
define('REGARDS', "Team Find Your Fit");
define('WALLET_TRANSACTION', 'wallet_transaction');
define('MPDF_PATH', 'application/third_party/mpdf/');
define('INTEREST_IMAGE_PATH', FCPATH . 'application/images/interest');
define('REPLICATE_PROFILE', 'replicate_profile');

define('FIT_SKILL_ID', '100');
define('FIT_PERSONALITY_ADULT_ID', '101');
define('FIT_INTELLIGENCE_ID', '102');
define('FIT_INTEREST_ID', '104');
define('FIT_PERSONALITY_TEENAGER_ID', '105');
define('FIT_LEARING_STYLE_ID', '106');
define('FIT_MULTIPLE_INTELLIGNCE_ID', '107');
define('FIT_APTITUDE_ID', '103');
define('FIT_SAT_PROFILE', '283');
define('FIT_ADULT_BASIC', '284, 282');

define('B_VENDOR_DOCS', 'documents/brochures');
define('L_VENDOR_DOCS', 'documents/letters');
define('P_VENDOR_DOCS', 'documents/presentations');
define('R_VENDOR_DOCS', 'documents/reports');
define('O_VENDOR_DOCS', 'documents/others');
define('SG_VENDOR_DOCS', 'documents/Smart_Goal_Document');

define('WEBSITE_TITLE', 'Find Your FIT');
define('LOGIN_TITLE', 'Find Your FIT (TAAS)');
define('WEBSITE_LOGO', '<span class="logo-mini"><b>FIT</b></span><span class="logo-lg"><b>F</b>ind <b>Y</b>our <b>F</b>IT</span>');

// SMTP Credentials
define('SMTP_AUTH', true);
define('SMTP_DEBUG', false);
define('SMTP_SECURE', 'tls');
define('SMTP_HOST', 'ssl://email-smtp.us-east-1.amazonaws.com');
define('SMTP_PORT', 465);
define('SMTP_USERNAME', 'AKIAUIJILVFOMZO42GWK');
define('SMTP_PASSWORD', 'BLbmSnrmQDUx1lv7Foh0YdZC4GPB5/8T2p8Vc0Lr55qw');

define('SMTP_USERNAME1', 'AKIAUIJILVFOAIRVDRYE');
define('SMTP_PASSWORD1', '0PWH+xQXBCH3Zc8/3py0JJRGLjoEIuguvw91AbpW');


define('ERROR_LOG_EMAILS', 'fyf.developers@gmail.com');
define('ERROR_LOG_CC_EMAILS', 'talentmat@gmail.com');
define('REGISTRATION_CC_EMAILS', 'talentmatdev@gmail.com');

define('MI_PROFILES', array(269, 270, 273, 275, 268));
define('SUPER_DIMENSION', 'super_dimension');
define('STUDENT_CAREER_BUILDER', 'student_career_builder');
define('MI_LEADERSHIP', '275'); //Multiple Intelligence Leadership Profile id

define('PRACTICE_TEST_TYPE', 'practice_test_type');
define('PRACTICE_DIMENSION', 'practice_dimension');
define('PRACTICE_SUB_DIMENSION', 'practice_sub_dimension');
define('PRACTICE_ATTEMPTED_TESTS', 'practice_attempted_tests');
define('PRACTICE_ATTEMPTED_TESTS_SCORE', 'practice_attempted_tests_score');
define('PRACTICE_QUESTIONS', 'practice_questions');
define('PRACTICE_TEST_DIMENSIONS', 'practice_test_dimensions');
define('PRACTICE_TEST_INSTRUCTIONS', 'practice_test_instruction');
define('PRACTICE_TESTS', 'practice_tests');
define('PRACTICE_PROFILER_WEIGHTAGE', 'practice_profiler_weightage');
define('DIGITAL_MARKETING_PROFILE', array(321));
define('COVID_PROFILE', array(374));

define('EMAIL_TEMPLATE', 'tm_email_template');

