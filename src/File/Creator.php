<?php
namespace Assets\File;

use Assets\Common\EntityDtoCreator;
use Assets\Db\File\Entity;

class Creator implements EntityDtoCreator
{
	/**
	 * @param Entity $entity
	 * @return File
	 */
	public function byEntity($entity)
	{
		return new File($entity);
	}
}