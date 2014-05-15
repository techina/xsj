<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => '新视界论坛',
// preloading 'log' component
    'preload' => array('log'),
// autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
),
    'modules' => array(
// uncomment the following to enable the Gii tool

        /*'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '880412',
// If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
),*/
        'admin'=>array(),
),
// application components
    'components' => array(
        'smarty' => array(
            'class' => 'application.extensions.CSmarty',
),
'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

// uncomment the following to use a MySQL database

         'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=xinshijie',
          'emulatePrepare' => true,
          'username' => 'root',
          'password' => 'root',
          'charset' => 'utf8',
          ),
           
/*'db'=>array(
          'connectionString' => 'mysql:host=mysql.hostinger.com.br;dbname=u150631626_xsj',
          'emulatePrepare' => true,
          'username' => 'u150631626_xsj',
          'password' => '19910424',
          'charset' => 'utf8',
          ),*/
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
          //'class' => 'ext.phpconsole.PhpConsoleLogRoute',
          array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning,trace',
          ),
          // uncomment the following to show log messages on web pages

            //array(
           // 'class'=>'CWebLogRoute',
           // ),
          ),
          ),
          ),
          // application-level parameters that can be accessed
          // using Yii::app()->params['paramName']
           
          );
