<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'emp');
  // User Details
  define('USER_EMAIL','vivek@gmail.com');
  define('USER_PASS',password_hash('123', PASSWORD_DEFAULT));
  define('USER_NAME','Vivek');
  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/mvc/');
  // Site Name
  define('SITENAME', '_YOUR_SITENAME_');