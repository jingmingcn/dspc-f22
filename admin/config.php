<?php

/*
#################################################################################################################
This is an OPTIONAL configuration file.
The role of this file is to make updating of "tinyfilemanager.php" easier.
So you can:
-Feel free to remove completely this file and configure "tinyfilemanager.php" as a single file application.
or
-Put inside this file all the static configuration you want and forgot to configure "tinyfilemanager.php".
#################################################################################################################
*/

// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$use_auth = true;

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$4dt6fpbNUxUvixu11sHbzu07tqD/gyN2nrf2z6KYU3wIcdzlkkE62',
);

// Readonly users
// e.g. array('users', 'guest', ...)
$readonly_users = array(
    
);

//set application theme
//options - 'light' and 'dark'
$theme = 'light';

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
// for dark theme use 'ir-black'
$highlightjs_style = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
//$default_timezone = 'Etc/UTC'; // UTC
$default_timezone = 'Asia/Shanghai';

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
$http_host = $_SERVER['HTTP_HOST'];

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
//$directories_users = array();
$directories_users = array(
    'admin' => '../高级程序设计/',
'201603041021' => '../高级程序设计/作业一/王明顺/',
'201703040049' => '../高级程序设计/作业一/袁煜淞/',
'201795040038' => '../高级程序设计/作业一/刘骏/',
'201903040001' => '../高级程序设计/作业一/赵坤/',
'201903040002' => '../高级程序设计/作业一/贺月莹/',
'201903040003' => '../高级程序设计/作业一/任晓璇/',
'201903040004' => '../高级程序设计/作业一/黄居霄/',
'201903040005' => '../高级程序设计/作业一/赵伟皓/',
'201903040006' => '../高级程序设计/作业一/杨潍璘/',
'201903040007' => '../高级程序设计/作业一/王诗亮/',
'201903040008' => '../高级程序设计/作业一/董世豪/',
'201903040009' => '../高级程序设计/作业一/徐梦昊/',
'201903040010' => '../高级程序设计/作业一/李文豪/',
'201903040011' => '../高级程序设计/作业一/于潇涵/',
'201903040012' => '../高级程序设计/作业一/曹志民/',
'201903040013' => '../高级程序设计/作业一/郝继飞/',
'201903040014' => '../高级程序设计/作业一/范夏仪/',
'201903040015' => '../高级程序设计/作业一/李东润/',
'201903040016' => '../高级程序设计/作业一/刘金享/',
'201903040017' => '../高级程序设计/作业一/纪文华/',
'201903040018' => '../高级程序设计/作业一/李馨语/',
'201903040019' => '../高级程序设计/作业一/邵龙/',
'201903040020' => '../高级程序设计/作业一/陈渤霖/',
'201903040021' => '../高级程序设计/作业一/张瑞/',
'201903040022' => '../高级程序设计/作业一/王海龙/',
'201903040023' => '../高级程序设计/作业一/杨惠雯/',
'201903040024' => '../高级程序设计/作业一/周佳怡/',
'201903040025' => '../高级程序设计/作业一/张国钰/',
'201903040026' => '../高级程序设计/作业一/李珂贤/',
'201903040027' => '../高级程序设计/作业一/齐共忠/',
'201903040028' => '../高级程序设计/作业一/刘雪艳/',
'201903040029' => '../高级程序设计/作业一/王成玲/',
'201903040030' => '../高级程序设计/作业一/李新龙/',
'201903040032' => '../高级程序设计/作业一/刘智卿/',
'201903040034' => '../高级程序设计/作业一/李彦霖/',
'201903040035' => '../高级程序设计/作业一/杨天娇/',
'201903040036' => '../高级程序设计/作业一/陈贝贝/',
'201903040037' => '../高级程序设计/作业一/王宇童/',
'201903040038' => '../高级程序设计/作业一/庄新星/',
'201903040039' => '../高级程序设计/作业一/孙迪/',
'201903040040' => '../高级程序设计/作业一/张天赐/',
'201903040041' => '../高级程序设计/作业一/郝启帅/',
'201903040042' => '../高级程序设计/作业一/佟明灏/',
'201903040043' => '../高级程序设计/作业一/董耀聪/',
'201903040044' => '../高级程序设计/作业一/孟令图/',
'201903040045' => '../高级程序设计/作业一/石统正/',
'201903040046' => '../高级程序设计/作业一/董林鑫/',
'201903040047' => '../高级程序设计/作业一/冯雪/',
'201903040048' => '../高级程序设计/作业一/吕慎堃/',
'201903040049' => '../高级程序设计/作业一/于飞/',
'201903040050' => '../高级程序设计/作业一/王钦浩/',
'201903040051' => '../高级程序设计/作业一/朱先飞/',
'201903040052' => '../高级程序设计/作业一/王月莹/',
'201903040053' => '../高级程序设计/作业一/相春洋/',
'201903040054' => '../高级程序设计/作业一/岳喜尧/',
'201903040055' => '../高级程序设计/作业一/徐傲翔/',
'201903040056' => '../高级程序设计/作业一/季文雅/',
'201903040057' => '../高级程序设计/作业一/田志昊/',
'201903040058' => '../高级程序设计/作业一/曹旦/',
'201903040059' => '../高级程序设计/作业一/陈建磊/',
'201903040060' => '../高级程序设计/作业一/马兆坤/',
'201903040061' => '../高级程序设计/作业一/刘鑫杰/',
'201903040063' => '../高级程序设计/作业一/孙小程/',
'201903040064' => '../高级程序设计/作业一/秦闻娅/',
'201903040065' => '../高级程序设计/作业一/吕昌宇/',
'201903040066' => '../高级程序设计/作业一/叶德盛/',
'201903040067' => '../高级程序设计/作业一/任世玉/',
'201903040068' => '../高级程序设计/作业一/苏畅/',
'201903040069' => '../高级程序设计/作业一/曹振/',
'201903040070' => '../高级程序设计/作业一/马小童/',
'201903040071' => '../高级程序设计/作业一/张国栋/',
'201903040073' => '../高级程序设计/作业一/马煜炜/',
'201903040074' => '../高级程序设计/作业一/马明宇/',
'201903040075' => '../高级程序设计/作业一/赵杰/',
'201903040076' => '../高级程序设计/作业一/马骁飞/',
'201903040077' => '../高级程序设计/作业一/褚宁宁/',
'201903040078' => '../高级程序设计/作业一/唐言迅/',
'201903040079' => '../高级程序设计/作业一/滕丽洋/',
'201903040080' => '../高级程序设计/作业一/荣晓培/',
'201903040081' => '../高级程序设计/作业一/王晗/',
'201903040082' => '../高级程序设计/作业一/张耀明/',
'201907040031' => '../高级程序设计/作业一/高福海/',
'201907040064' => '../高级程序设计/作业一/吴胜豪/',
);

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/datetime.format.php
$datetime_format = 'd.m.y H:i:s';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$allowed_file_extensions = 'pdf,zip,';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$allowed_upload_extensions = 'pdf,zip,';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = '';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', ...)
$exclude_items = array(
    
);

// Online office Docs Viewer
// Availabe rules are 'google', 'microsoft' or false
// google => View documents using Google Docs Viewer
// microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$online_viewer = 'microsoft';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;


// max upload file size
$max_upload_size_bytes = 5000;

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';

// Should users be notified of their block?
$ip_silent = true;

// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

?>
