<?php

/**
 * Bicubic PHP Framework
 *
 * @author     Juan Rodríguez-Covili <juan@bicubic.cl>
 * @copyright  2011 Bicubic Technology - http://www.bicubic.cl
 * @license    MIT
 * @framework  2.2
 */
$config = array();
//Server values
$config['server_temp_folder'] = "/tmp/";
$config['server_logg_file'] = "/tmp/logs/bicubic_";
$config['server_app_folder'] = "/home/bicubic/";
//Web values
$config['web_folder'] = "http://localhost/";
$config['web_url'] = "http://localhost/index.php";
$config['web_secure_url'] = "https://localhost/index.php";
$config['web_contact_email'] = "";
$config['web_contact_name'] = "";
$config['web_time_out'] = 360000;
$config['web_page_items'] = 15;
//Data Base values
$config['database_host'] = "localhost";
$config['database_database'] = "5432";
$config['database_user'] = "postgres";
$config['database_password'] = "";
//Email values
$config['email_host'] = "";
$config['email_port'] = 25;
$config['email_auth'] = true;
$config['email_user'] = "";
$config['email_password'] = "";
//System
$config['system'] = "linux";
//URL params value
$config['param_app'] = "app";
$config['param_navigation'] = "nav";
$config['param_id'] = "id";
$config['param_page'] = "page";
//Folders
$config['folder_template'] = "templates/";
$config['folder_navigation'] = "views/";
?>