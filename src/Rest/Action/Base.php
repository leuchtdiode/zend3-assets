<?php
namespace Assets\Rest\Action;

use Zend\Mvc\Controller\AbstractRestfulController;

/**
 */
abstract class Base extends AbstractRestfulController
{
	abstract public function executeAction();

	/**
	 * @return mixed
	 */
	protected function forbidden()
	{
		return $this
			->getResponse()
			->setStatusCode(403);
	}
}