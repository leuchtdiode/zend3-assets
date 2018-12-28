<?php
namespace Assets;

return [

	'service_manager' => [
		'abstract_factories' => [
			DefaultFactory::class,
		],
	],

	'controllers' => [
		'abstract_factories' => [
			DefaultFactory::class,
		],
	],
];