<?php

/**
 * Bicubic PHP Framework
 *
 * @author     Juan Rodríguez-Covili <juan@bicubic.cl>
 * @copyright  2011-2014 Bicubic Technology - http://www.bicubic.cl
 * @license    MIT
 * @version 3.0.0
 */
$config = array();
//Config
$config['maintenance'] = false;
$config['sslavailable'] = false;
$config['debugdatabase'] = false;
$config['urlforms'] = false;
$config['urlbase'] = "https://www.bicubic.cl/";
/* URL BASE Apache
    RewriteEngine On
    RewriteCond %{REQUEST_URI} !/assets
    RewriteRule /([a-zA-Z0-9.]+)/([a-zA-Z0-9.]+)/([a-zA-Z0-9.]+)?(.*) /index.php?app=$1&nav=$2&id=$3 [QSA]
    RewriteCond %{REQUEST_URI} !/assets
    RewriteRule /([a-zA-Z0-9.]+)/([a-zA-Z0-9.]+)?(.*) /index.php?app=&nav=$1&id=$2 [QSA]
    RewriteRule /([a-zA-Z0-9.]+)/([a-zA-Z0-9.]+)/assets/(.*) /assets/$3
    RewriteRule /([a-zA-Z0-9.]+)/assets/(.*) /assets/$2
  */

//Web  
$config['web_name'] = "Bicubic PHP Framework";
$config['web_copyright'] = "©2014 Bicubic Technology - All rights reserved";
$config['web_contact_email'] = "hello@bicubic.cl";
$config['web_contact_name'] = "Bicubic Technology";
$config['web_time_out'] = 360000;
$config['web_table_size'] = 100;
//Code
$config['code_time_out'] = 300;
$config['code_time_zone'] = 'America/Santiago';
$config['code_error_report'] =  E_ALL & ~(E_STRICT | E_DEPRECATED);
//Data Base values
$config['database_host'] = "localhost";
$config['database_database'] = "bicubic";
$config['database_user'] = "root";
$config['database_password'] = "root";
//Email with SMTP
$config['email_host'] = "ssl://smtp.gmail.com";
$config['email_port'] = 465;
$config['email_auth'] = true;
$config['email_user'] = "";
$config['email_password'] = "";
//Email with Mandrill
$config['mandrill_key'] = "";
//recaptcha
$config['recaptcha_publickey'] = "";
$config['recaptcha_privatekey'] = "";
//Facebook
$config['facebook_appid'] = "";
$config['facebook_secret'] = "";
//Twitter
$config['twitter_key'] = "";
$config['twitter_secret'] = "";
//Foursquare
$config['foursquare_key'] = "";
$config['foursquare_secret'] = "";
//Instagram
$config['instagram_key'] = "";
$config['instagram_secret'] = "";
//Bitly
$config['bitly_login'] = "";
$config['bitly_apikey'] = "";
//Google Cloud Storage
$config['mylodon_apikey'] = "";
//Certificates for ios push notification
$config['certificate_private'] = "";
$config['certificate_auth'] = "";
?>