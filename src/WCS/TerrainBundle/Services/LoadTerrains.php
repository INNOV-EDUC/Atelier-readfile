<?php

namespace WCS\TerrainBundle\Services;

use Doctrine\ORM\EntityManager;
use WCS\TerrainBundle\Entity\Terrain;

class LoadTerrains
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function load($path)
    {
        $stream = fopen($path, 'r');
        while ($line = fgets($stream))
        {
            $data = explode(';', $line);
            $entity = new Terrain();
            $entity->setName($data[0]);
            $entity->setLatitude($data[1]);
            $entity->setLongitude($data[2]);
            $this->em->persist($entity);
            $this->em->flush();
        }
        fclose($stream);
    }
}