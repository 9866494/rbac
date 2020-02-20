<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service;

use Awful85\Rbac\ContainerInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use \Awful85\Rbac\Service\Permission\Dto\Permission as PermissionDto;

class Serializer extends BaseService
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(?ContainerInterface $container = null)
    {
        parent::__construct($container);

        $libraryRoot = $this->getContainer()->getLibraryRootPath();

        $this->serializer = SerializerBuilder::create()
//            ->setCacheDir($libraryRoot . "/data/JMS/Cache")
            ->setPropertyNamingStrategy(new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy())
            ->addMetadataDir($libraryRoot . "/data/JMS/MetaDataDir")
            ->build();
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    public function serializeJson(object $object): string
    {
        return $this->getSerializer()->serialize($object, 'json');
    }

    public function deserializePermissionJsonString(string $jsonString): PermissionDto
    {
        return $this->getSerializer()->deserialize($jsonString, PermissionDto::class, 'json');
    }


}