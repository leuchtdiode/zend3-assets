<?php
namespace Assets\File;

use Assets\Db\File\Saver;
use Exception;
use Assets\Db\File\Entity;

class Adder
{
	/**
	 * @var Saver
	 */
	private $entitySaver;

	/**
	 * @var Provider
	 */
	private $provider;

	/**
	 * @var
	 */
	private $persister;

	/**
	 * @param Saver $entitySaver
	 * @param Provider $provider
	 */
	public function __construct(Saver $entitySaver, Provider $provider)
	{
		$this->entitySaver = $entitySaver;
		$this->provider    = $provider;
	}

	/**
	 * @param AddData $data
	 * @return AddResult
	 * @throws Exception
	 */
	public function add(AddData $data)
	{
		$result = new AddResult();
		$result->setSuccess(false);

		$entity = new Entity();
		$entity->setFileName($data->getFileName());
		$entity->setMimeType($data->getMimeType());
		$entity->setSize($data->getSize());

		$this->entitySaver->save($entity);

		// TODO add to folder

		$result->setFile(
			$this->provider->byId($entity->getId())
		);
		$result->setSuccess(true);

		return $result;
	}
}