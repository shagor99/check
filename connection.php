<?php
function csrfToken(){
    $token= bin2hex(random_bytes(32));
    $_SESSION['csrf_token']=$token;
    return $token;
}
    // define('DB_HOST','localhost');
    // define('DB_USER','diploma1_short_user');
    // define('DB_PASS','aamOXW{!_H,o');
    // define('DB_NAME','diploma1_short');
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','make_url');
    $connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($connection,"utf8");
    if( ! $connection) {
        throw new Exception ( "Can not connect database" );
    }
    date_default_timezone_set("Asia/Dhaka");
    $date=date("d-M-Y");
    
?>