<?php
namespace Assets;

use Assets\Rest\Action\File\Add;
use Assets\Rest\Action\File\Get;
use Common\Router\HttpRouteCreator;

return HttpRouteCreator::create()
	->setRoute('/file')
	->setMayTerminate(false)
	->setChildRoutes(
		[
			'add'         => HttpRouteCreator::create()
				->setMethods([ 'POST' ])
				->setAction(Add::class)
				->getConfig(),
			'single-item' => HttpRouteCreator::create()
				->setRoute('/:fileId')
				->setConstraints(
					[
						'file' => '.{36}',
					]
				)
				->setMayTerminate(false)
				->setChildRoutes(
					[
						'get' => HttpRouteCreator::create()
							->setMethods([ 'GET' ])
							->setAction(Get::class)
							->getConfig(),
					]
				)
				->getConfig(),
		]
	)
	->getConfig();
