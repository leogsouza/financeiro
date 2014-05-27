<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Controle Financeiro Pessoal',
    
    'aliases' => array(
        'bootstrap' => dirname(__FILE__) . '/../extensions/bootstrap',//realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
        'yiiwheels' => dirname(__FILE__) . '/../extensions/yiiwheels',//realpath(__DIR__ . '/../extensions/yiiwheels'), // change if necessary
    ),
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
        'application.models.*',
        'application.components.*',
        'ext.giix-components.*',
        'bootstrap.helpers.TbHtml',
        'bootstrap.helpers.TbArray',
        'bootstrap.widgets.*',
        'bootstrap.behaviors.TbWidget',
        'ext.EDataTables.*',
        'application.widgets.*',
	),
    'modules'=>require(dirname(__FILE__).'/modules.php'),
    
	// application components
	'components'=>array(
		'user'=>array(
			//'class' => 'EWebUser',

			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
        ),
        'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',   
        ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
            'showScriptName' => false,
		),
		
        
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db' => require(dirname(__FILE__).'/db.php'),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
    'params' => require(dirname(__FILE__).'/params.php'),
	'language' => 'pt_br',
    'timeZone' => 'America/Sao_Paulo',
);