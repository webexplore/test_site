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
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

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
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define ("FOOTER_LINK_HEADER", serialize (array (
    "en" => array(
        "first_block" => "Gangasagar",
        "second_block" => "Quick Links",
        "third_block" => "Bathing Dates 2021"
    ),
    "bn" => array(
        "first_block" => "গঙ্গাসাগর",
        "second_block" => "গুরুত্ব লিঙ্ক",
        "third_block" => "পূণ্য তিথি 2021"
    ),
    "hi" => array(
        "first_block" => "गंगासागर",
        "second_block" => "महत्वपूर्ण लिंक",
        "third_block" => "पुण्य तिथि 2021"
    )
)));

define ("FOOTER_LINK", serialize (array (
    "en" => array(
        "link1" => "Gangasagar Mela is the World's second largest human congregation at the confluence of holy river Ganga and Bay of Bengal after Kumbh.",
        "link2" => "Sagardwip, West Bengal, India ",
        "link3" => "dm-ali@nic.in",
        "link4" => "Introduction",
        "link5" => "Mythological Significance",
        "link6" => "Astrological Significance",
        "link7" => "Past Gangasagar Mela",
        "link8" => "How to reach",
        "link9" => "Where to stay",
        "link10" => "Weather",
        "link11" => "Places to visit",
        "link12" => "Makar Sakranti Thursday,14th January 2021 ",
        "link13" => "Punya Kala 08:30AM to 05:46PM",
        "link14" => "Maha Punya 08:30AM to 10:15AM"
        
    ),
    "hi" => array(
        "link1" => "गंगासागर मेला कुंभ के बाद पवित्र नदी गंगा और बंगाल की खाड़ी के संगम पर दुनिया की दूसरी सबसे बड़ी मानव मण्डली है।",
        "link2" => "सागरदीप, पश्चिम बंगाल, भारत",
        "link3" => "dm-ali@nic.in",
        "link4" => "परिचय",
        "link5" => "पौराणिक मान्यता",
        "link6" => "ज्योतिषीय महत्व",
        "link7" => "अतीत गंगासागर मेला",
        "link8" => "कैसे पहुंचा जाये",
        "link9" => "कहाँ रहा जाए",
        "link10" => "मौसम",
        "link11" => "घूमने के स्थान",
        "link12" => "मकर संक्रांति : गुरुवार, १४ जनवरी, २०२०",
        "link13" => "पुण्य कला : सुबह ०८:३० से  संध्या ०५:४६  तक",
        "link14" => "महापुण्य कला : सुबह ०८:३० से सुबह १०:१५ बजे तक"
    ),
    "bn" => array(
        "link1" => "গঙ্গাসাগর মেলা কুম্ভের পরে পবিত্র নদীর গঙ্গা ও বঙ্গোপসাগরের সঙ্গমে বিশ্বের দ্বিতীয় বৃহত্তম মানবসমাজ।",
        "link2" => "সাগরদ্বীপ, পশ্চিমবঙ্গ, ভারত",
        "link3" => "dm-ali@nic.in",
        "link4" => "ভূমিকা",
        "link5" => "পৌরাণিক তাৎপর্য",
        "link6" => "জ্যোতিষবিদ্যার তাৎপর্য",
        "link7" => "অতীত গঙ্গাসাগর মেলা",
        "link8" => "কিভাবে পৌছব",
        "link9" => "কোথায় অবস্থান করব",
        "link10" => "আবহাওয়া",
        "link11" => "আকর্ষনীয় স্থান",
        "link12" => "মকর সংক্রান্তিঃ বৃহস্পতিবার, ১৪ই জানুয়ারী, ২০২১",
        "link13" => "পুন্য কলাঃ সকাল ৮ টা বেজে ৩০ মিনিট থেকে সন্ধ্যা  ৫ টা ৪৬ মিনিট",
        "link14" => "মহাপুন্য কলাঃ সকাল ৮ টা বেজে ৩০ মিনিট থেকে সকাল  ১০ টা ১৫ মিনিট"
    )
)));

/** PAYMENT GATEWAY INFO */