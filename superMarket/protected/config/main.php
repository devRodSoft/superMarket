<?php
date_default_timezone_set('America/Los_Angeles');
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array('basePath'=> dirname(__FILE__) . DIRECTORY_SEPARATOR . '..', 'name'=> 'My Web Application',
// preloading 'log' component
'preload'=> array('log'),
// autoloading model and component classes
'import'=> array('application.models.*', 'application.components.*', ), 'modules'=> array(
// uncomment the following to enable the Gii tool
'cardDeck', 'gii'=> array('class'=> 'system.gii.GiiModule', 'password'=> '123',
// If removed, Gii defaults to localhost only. Edit carefully to taste.
'ipFilters'=> array('127.0.0.1', '::1', '192.168.*.*'), ), ),
// application components
'components'=> array('user'=> array(
// enable cookie-based authentication
'allowAutoLogin'=> true, ),
// uncomment the following to enable URLs in path-format
'urlManager'=> array('urlFormat'=> 'path', 'rules'=> array(
// 'api/<controller:\w+>' => array('<controller>/restList', 'verb' => 'GET'),
// 'api/<controller:\w+>/<id:\w+>' => array('<controller>/restView', 'verb' =>
// 'GET'),
// 'api/<controller:\w+>/<id:\w+>/<var:\w*>' => array('<controller>/restView',
// 'verb' => 'GET'),
// 'api/<controller:\w+>/<id:\w+>/<var:\w*>/<var2:\w*>' =>
// array('<controller>/restView', 'verb' => 'GET'),
// array('<controller>/restUpdate', 'pattern' => 'api/<controller:\w+>/<id:\d+>',
// 'verb' => 'PUT'),
// array('<controller>/restUpdate', 'pattern' =>
// 'api/<controller:\w+>/<var:\w+>/<id:\d+>', 'verb' => 'PUT'),
// array('<controller>/restDelete', 'pattern' => 'api/<controller:\w+>/<id:\d+>',
// 'verb' => 'DELETE'),
// array('<controller>/restCreate', 'pattern' => 'api/<controller:\w+>', 'verb'
// => 'POST'),
// array('<controller>/restCreate', 'pattern' => 'api/<controller:\w+>/<id:\w+>',
// 'verb' => 'POST'),
// '<controller:\w+>/<id:\d+>' => '<controller>/view',
// '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
// '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
// REST patterns
array('sessionApi/login', 'pattern'=> 'api/login'), array('sessionApi/logout', 'pattern'=> 'api/logout', 'verb'=> 'POST'), array('sessionApi/register', 'pattern'=> 'api/register', 'verb'=> 'POST'), array('sessionApi/getCurrentUser', 'pattern'=> 'api/getcurrentuser', 'verb'=> 'GET'), array('sessionApi/getUserAvailableApps', 'pattern'=> 'api/getuserapps', 'verb'=> 'GET'), array('schoolApi/getByZip', 'pattern'=> 'api/getschools', 'verb'=> 'POST'), array('testApi/createTestGroup', 'pattern'=> 'api/createtestgroup', 'verb'=> 'POST'), array('testApi/saveTestAndStudent', 'pattern'=> 'api/savestudenttest', 'verb'=> 'POST'), array('testApi/getTeacherTestGroups', 'pattern'=> 'api/getteachertestgroups', 'verb'=> 'GET'), array('testApi/getTestGroupData', 'pattern'=> 'api/gettestgroupdata', 'verb'=> 'GET'), array('testApi/saveGroups', 'pattern'=> 'api/savegroups', 'verb'=> 'POST'), array('testApi/getHoldingGroup', 'pattern'=> 'api/getholdinggroupdata', 'verb'=> 'GET'), array('synchronizationApi/getGenericData', 'pattern'=> 'api/synchronizerGeneric', 'verb'=> 'GET'), array('synchronizationApi/getTeacherRelatedData', 'pattern'=> 'api/synchronizerTeacher', 'verb'=> 'GET'), array('synchronizationApi/synchronizerSave', 'pattern'=> 'api/synchronizerSave', 'verb'=> 'POST'), array('synchronizationApi/synchronizerSaveTeacherRelatedData', 'pattern'=> 'api/synchronizerTeacherSave', 'verb'=> 'POST'), array('synchronizationApi/saveData', 'pattern'=> 'api/synchronizer', 'verb'=> 'POST'), array('student/archive', 'pattern'=> 'student/archive/<id:\d+>', 'verb'=> 'GET'), array('helperApi/list', 'pattern'=> 'api/<model:\w+>', 'verb'=> 'GET'), array('helperApi/view', 'pattern'=> 'api/<model:\w+>/<id:\d+>', 'verb'=> 'GET'),
// array('helperApi/update', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' =>
// 'PUT'),
array('helperApi/update', 'pattern'=> 'api/<model:\w+>/update/<id:\d+>', 'verb'=> 'POST'), array('helperApi/delete', 'pattern'=> 'api/<model:\w+>/delete/<id:\d+>', 'verb'=> 'POST'),
// array('helperApi/delete', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' =>
// 'DELETE'),
array('helperApi/create', 'pattern'=> 'api/<model:\w+>', 'verb'=> 'POST'),
// Other controllers
'<controller:\w+>/<action:\w+>'=> '<controller>/<action>', ), ), 'db'=> array('class'=> 'CDbConnection', 'connectionString'=> 'mysql:host=localhost;dbname=sippProd', 'username'=> 'root', 'password'=> '', 'emulatePrepare'=> true, ), 'errorHandler'=> array(
// use 'site/error' action to display errors
'errorAction'=> 'site/error', ), 'log'=> array('class'=> 'CLogRouter', 'routes'=> array( array('class'=> 'CFileLogRoute', 'levels'=> 'error, warning, log, debug', ),
// uncomment the following to show log messages on web pages
/*
 array(
 'class'=>'CWebLogRoute',
 ),
 */
), ),
// 'request' => array(
// 'baseUrl' => '/api/',
// ),
),
// application-level parameters that can be accessed
// using Yii::app()->params['paramName']
'params'=> array(
// this is used in contact page
'adminEmail'=> 'webmaster@example.com', ), );
