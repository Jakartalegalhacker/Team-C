<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------
  | DATABASE CONNECTIVITY SETTINGS
  | -------------------------------------------------------------------
  | This file will contain the settings needed to access your database.
  |
  | For complete instructions please consult the 'Database Connection'
  | page of the User Guide.
  |
  | -------------------------------------------------------------------
  | EXPLANATION OF VARIABLES
  | -------------------------------------------------------------------
  |
  |	['hostname'] The hostname of your database server.
  |	['username'] The username used to connect to the database
  |	['password'] The password used to connect to the database
  |	['database'] The name of the database you want to connect to
  |	['dbdriver'] The database type. ie: mysql.  Currently supported:
  mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
  |	['dbprefix'] You can add an optional prefix, which will be added
  |				 to the table name when using the  Active Record class
  |	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
  |	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
  |	['cache_on'] TRUE/FALSE - Enables/disables query caching
  |	['cachedir'] The path to the folder where cache files should be stored
  |	['char_set'] The character set used in communicating with the database
  |	['dbcollat'] The character collation used in communicating with the database
  |				 NOTE: For MySQL and MySQLi databases, this setting is only used
  | 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
  |				 (and in table creation queries made with DB Forge).
  | 				 There is an incompatibility in PHP with mysql_real_escape_string() which
  | 				 can make your site vulnerable to SQL injection if you are using a
  | 				 multi-byte character set and are running versions lower than these.
  | 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
  |	['swap_pre'] A default table prefix that should be swapped with the dbprefix
  |	['autoinit'] Whether or not to automatically initialize the database.
  |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
  |							- good for ensuring strict SQL while developing
  |
  | The $active_group variable lets you choose which connection group to
  | make active.  By default there is only one group (the 'default' group).
  |
  | The $active_record variables lets you determine whether or not to load
  | the active record class
 */

$active_group = 'default';
$active_record = TRUE;


$db['default']['hostname'] = 'kumparan.cbrvon3tt9sw.ap-southeast-1.rds.amazonaws.com';
$db['default']['username'] = 'ywkumparan';
$db['default']['password'] = 'Kumparan123456';
$db['default']['database'] = 'kumparan';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['port'] = 3306;
//$db['default']['pconnect'] = TRUE;
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

$db['arango']['hostname'] = 'kummis.cbrvon3tt9sw.ap-southeast-1.rds.amazonaws.com';
$db['arango']['username'] = 'ymkummis';
$db['arango']['password'] = 'Kumparan123456';
$db['arango']['database'] = 'arangodb';
$db['arango']['dbdriver'] = 'mysql';
$db['arango']['dbprefix'] = '';
//$db['arango']['pconnect'] = TRUE;
$db['arango']['pconnect'] = FALSE;
$db['arango']['db_debug'] = TRUE;
$db['arango']['cache_on'] = FALSE;
$db['arango']['cachedir'] = '';
$db['arango']['char_set'] = 'utf8';
$db['arango']['dbcollat'] = 'utf8_general_ci';
$db['arango']['swap_pre'] = '';
$db['arango']['autoinit'] = TRUE;
$db['arango']['stricton'] = FALSE;

$db['facebook']['hostname'] = 'facebook.cbrvon3tt9sw.ap-southeast-1.rds.amazonaws.com';
$db['facebook']['username'] = 'ywfacebook';
$db['facebook']['password'] = 'Kumparan123456';
$db['facebook']['database'] = 'facebook';
$db['facebook']['dbdriver'] = 'mysql';
$db['facebook']['dbprefix'] = '';
$db['facebook']['port'] = 3306;
//$db['facebook']['pconnect'] = TRUE;
$db['facebook']['pconnect'] = FALSE;
$db['facebook']['db_debug'] = TRUE;
$db['facebook']['cache_on'] = FALSE;
$db['facebook']['cachedir'] = '';
$db['facebook']['char_set'] = 'utf8';
$db['facebook']['dbcollat'] = 'utf8_general_ci';
$db['facebook']['swap_pre'] = '';
$db['facebook']['autoinit'] = TRUE;
$db['facebook']['stricton'] = FALSE;

$db['twitter']['hostname'] = 'twitter.cbrvon3tt9sw.ap-southeast-1.rds.amazonaws.com';
$db['twitter']['username'] = 'ywtwitter';
$db['twitter']['password'] = 'Kumparan123456';
$db['twitter']['database'] = 'twitter';
$db['twitter']['dbdriver'] = 'mysql';
$db['twitter']['dbprefix'] = '';
$db['twitter']['port'] = 3306;
//$db['twitter']['pconnect'] = TRUE;
$db['twitter']['pconnect'] = FALSE;
$db['twitter']['db_debug'] = TRUE;
$db['twitter']['cache_on'] = FALSE;
$db['twitter']['cachedir'] = '';
$db['twitter']['char_set'] = 'utf8';
$db['twitter']['dbcollat'] = 'utf8_general_ci';
$db['twitter']['swap_pre'] = '';
$db['twitter']['autoinit'] = TRUE;
$db['twitter']['stricton'] = FALSE;

$db['instagram']['hostname'] = 'instagram.cbrvon3tt9sw.ap-southeast-1.rds.amazonaws.com';
$db['instagram']['username'] = 'ywinstagram';
$db['instagram']['password'] = 'Kumparan123456';
$db['instagram']['database'] = 'instagram';
$db['instagram']['dbdriver'] = 'mysql';
$db['instagram']['dbprefix'] = '';
$db['instagram']['port'] = 3306;
//$db['instagram']['pconnect'] = TRUE;
$db['instagram']['pconnect'] = FALSE;
$db['instagram']['db_debug'] = TRUE;
$db['instagram']['cache_on'] = FALSE;
$db['instagram']['cachedir'] = '';
$db['instagram']['char_set'] = 'utf8';
$db['instagram']['dbcollat'] = 'utf8_general_ci';
$db['instagram']['swap_pre'] = '';
$db['instagram']['autoinit'] = TRUE;
$db['instagram']['stricton'] = FALSE;

/* Ezytravel and my configuration */
/* End of file database.php */
/* Location: ./application/config/database.php */