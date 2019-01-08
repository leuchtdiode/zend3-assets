<?php
namespace Assets\File\Filesystem;

use Assets\Db\File\Entity;

class PathProvider
{
	/**
	 * @param Entity $entity
	 * @return string
	 */
	public function byEntity(Entity $entity)
	{
		echo $entity->getId();
	}
}