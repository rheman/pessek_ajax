<?php

return [
        'plugin' => [
                'version' => '4.0',
		'name' => 'Ajax Utilities',
        ],
	'bootstrap' => \hypeJunction\Ajax\Bootstrap::class,
	'routes' => [
		'ajax:deferred' => [
			'path' => '/_deferred/{view}',
			'controller' => \hypeJunction\Ajax\DeferredViewController::class,
			'requirements' => [
				'view' => '.+',
			],
			'middleware' => [
				\Elgg\Router\Middleware\AjaxGatekeeper::class,
			]
		],
	],
];
