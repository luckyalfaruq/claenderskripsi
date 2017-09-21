<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
//database satu
$db['default']['hostname'] = "10.0.8.249";
$db['default']['username'] = "web_agenda";
$db['default']['password'] = "agenda2016";

$db['default']['database'] = "web_2013";
$db['default']['dbdriver'] = "mysqli";
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

//database dua
$db['db2']['hostname'] = "10.0.8.248";
$db['db2']['username'] = "web_agenda";
$db['db2']['password'] = "agenda2016";

$db['db2']['database'] = "adab2014";
$db['db2']['dbdriver'] = "mysqli";
$db['db2']['dbprefix'] = '';
$db['db2']['pconnect'] = FALSE;
$db['db2']['db_debug'] = TRUE;
$db['db2']['cache_on'] = FALSE;
$db['db2']['cachedir'] = '';
$db['db2']['char_set'] = 'utf8';
$db['db2']['dbcollat'] = 'utf8_general_ci';
$db['db2']['swap_pre'] = '';
$db['db2']['autoinit'] = TRUE;
$db['db2']['stricton'] = FALSE;

//database tiga
$db['db3']['hostname'] = "10.0.8.248";
$db['db3']['username'] = "web_agenda";
$db['db3']['password'] = "agenda2016";


$db['db3']['database'] = "isoshum2014";
$db['db3']['dbdriver'] = "mysqli";
$db['db3']['dbprefix'] = '';
$db['db3']['pconnect'] = FALSE;
$db['db3']['db_debug'] = TRUE;
$db['db3']['cache_on'] = FALSE;
$db['db3']['cachedir'] = '';
$db['db3']['char_set'] = 'utf8';
$db['db3']['dbcollat'] = 'utf8_general_ci';
$db['db3']['swap_pre'] = '';
$db['db3']['autoinit'] = TRUE;
$db['db3']['stricton'] = FALSE;

//database empat
$db['db4']['hostname'] = "10.0.8.248";
$db['db4']['username'] = "web_agenda";
$db['db4']['password'] = "agenda2016";


$db['db4']['database'] = "saintek2014";
$db['db4']['dbdriver'] = "mysqli";
$db['db4']['dbprefix'] = '';
$db['db4']['pconnect'] = FALSE;
$db['db4']['db_debug'] = TRUE;
$db['db4']['cache_on'] = FALSE;
$db['db4']['cachedir'] = '';
$db['db4']['char_set'] = 'utf8';
$db['db4']['dbcollat'] = 'utf8_general_ci';
$db['db4']['swap_pre'] = '';
$db['db4']['autoinit'] = TRUE;
$db['db4']['stricton'] = FALSE;


//database lima
$db['db5']['hostname'] = "10.0.8.248";
$db['db5']['username'] = "web_agenda";
$db['db5']['password'] = "agenda2016";


$db['db5']['database'] = "tarbiyah2014";
$db['db5']['dbdriver'] = "mysqli";
$db['db5']['dbprefix'] = '';
$db['db5']['pconnect'] = FALSE;
$db['db5']['db_debug'] = TRUE;
$db['db5']['cache_on'] = FALSE;
$db['db5']['cachedir'] = '';
$db['db5']['char_set'] = 'utf8';
$db['db5']['dbcollat'] = 'utf8_general_ci';
$db['db5']['swap_pre'] = '';
$db['db5']['autoinit'] = TRUE;
$db['db5']['stricton'] = FALSE;

//database enam
$db['db6']['hostname'] = "10.0.8.248";
$db['db6']['username'] = "web_agenda";
$db['db6']['password'] = "agenda2016";


$db['db6']['database'] = "ushuluddin2015";
$db['db6']['dbdriver'] = "mysqli";
$db['db6']['dbprefix'] = '';
$db['db6']['pconnect'] = FALSE;
$db['db6']['db_debug'] = TRUE;
$db['db6']['cache_on'] = FALSE;
$db['db6']['cachedir'] = '';
$db['db6']['char_set'] = 'utf8';
$db['db6']['dbcollat'] = 'utf8_general_ci';
$db['db6']['swap_pre'] = '';
$db['db6']['autoinit'] = TRUE;
$db['db6']['stricton'] = FALSE;

$db['db7']['hostname'] = "10.0.8.248";
$db['db7']['username'] = "web_agenda";
$db['db7']['password'] = "agenda2016";

$db['db7']['database'] = "webfakultas";
$db['db7']['dbdriver'] = "mysqli";
$db['db7']['dbprefix'] = '';
$db['db7']['pconnect'] = FALSE;
$db['db7']['db_debug'] = TRUE;
$db['db7']['cache_on'] = FALSE;
$db['db7']['cachedir'] = '';
$db['db7']['char_set'] = 'utf8';
$db['db7']['dbcollat'] = 'utf8_general_ci';
$db['db7']['swap_pre'] = '';
$db['db7']['autoinit'] = TRUE;
$db['db7']['stricton'] = FALSE;

$db['db8']['hostname'] = "10.0.8.248";
$db['db8']['username'] = "web_agenda";
$db['db8']['password'] = "agenda2016";

$db['db8']['database'] = "webunit";
$db['db8']['dbdriver'] = "mysqli";
$db['db8']['dbprefix'] = '';
$db['db8']['pconnect'] = FALSE;
$db['db8']['db_debug'] = TRUE;
$db['db8']['cache_on'] = FALSE;
$db['db8']['cachedir'] = '';
$db['db8']['char_set'] = 'utf8';
$db['db8']['dbcollat'] = 'utf8_general_ci';
$db['db8']['swap_pre'] = '';
$db['db8']['autoinit'] = TRUE;
$db['db8']['stricton'] = FALSE;

// $db['db9']['hostname'] = "10.0.8.247";
// $db['db9']['username'] = "web_agenda";
// $db['db9']['password'] = "agenda2016";

// $db['db9']['database'] = "prodi_web";
// $db['db9']['dbdriver'] = "mysqli";
// $db['db9']['dbprefix'] = '';
// $db['db9']['pconnect'] = FALSE;
// $db['db9']['db_debug'] = TRUE;
// $db['db9']['cache_on'] = FALSE;
// $db['db9']['cachedir'] = '';
// $db['db9']['char_set'] = 'utf8';
// $db['db9']['dbcollat'] = 'utf8_general_ci';
// $db['db9']['swap_pre'] = '';
// $db['db9']['autoinit'] = TRUE;
// $db['db9']['stricton'] = FALSE;
/* End of file database.php */
/* Location: ./application/config/database.php */
