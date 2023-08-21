<?php
session_start();


date_default_timezone_set("Africa/Lagos"); # set your time zone (optional)
 

// 8 and 40 and 30  ini_set('session.gc_maxlifetime', 86400);                   # set how long (in secs, 86400=1day) you want you session to last, 
															#comment this off if you want to use default from server (optional)

# REQUIRED VALUES
######################################################################
#########     Please provide values for these varables     ###########
######################################################################

$db_host = 'localhost';
$db_username = 'root'; 
$db_password = '';
$db_name = 'pay_slip_generator';

// $db = new mysqli($db_host,$db_username,$db_password,$db_name);


// $db_host = 'localhost';
// $db_username = 'muhammadrec1fa'; 
// $db_password = '0c~T[BxDx2aP';
// $db_name = 'recifa';

# replace the values below with your values

# comment this part below when live 
define('ROOT', '/ibn_katheer/');    # use this for localhost
//define('WEB_ROOT', $_SERVER['PROJECT_ROOT'].'/');    # use this for localhost
define('ROOT_URL', 'http://localhost/cresent_cloud_solutions/');              # use this for localhost
 

 If(ROOT === '' OR ROOT_URL ===''){
	echo '<p style="color:red;"> Please open your crib.php file and provide the required values</p>';
	return;
}



function isLoggedIn(){
	return isset($_SESSION['email']);
}

function cleanInput($input){
 
  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );
 
    $output = preg_replace($search, '', $input);
    return htmlentities(strip_tags($output));
  }


   function sanitize(&$input) { 
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $input[$var] = sanitize($val);
        }
    }
    else {
        // if (get_magic_quotes_gpc()) {
        //     $input = stripslashes($input);
        // }
        $input  = cleanInput($input);
        // $input = $GLOBALS['db']->real_escape_string($input);
    }

    return $input;
   }




?>