<?php
declare(strict_types=1);

namespace Awful85\Rbac\Test;

use Awful85\Rbac\Container;
use MongoDB\Client;
use RuntimeException;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

class TestContainer extends Container
{
    /**
     * TestContainer constructor.
     * @throws \Doctrine\ODM\MongoDB\MongoDBException
     */
    public function __construct()
    {
        $rootPath = realpath(__DIR__ . '/../');

        if (!file_exists($file = $rootPath . '/vendor/autoload.php')) {
            throw new RuntimeException('Install dependencies to run this script.');
        }

        require_once $file;

        AnnotationRegistry::registerLoader('class_exists');

        $doctrineFolder = $rootPath . '/data/DoctrineODM';

        $config = new Configuration();
        $config->setProxyDir($doctrineFolder . '/Proxies');
        $config->setProxyNamespace('Proxies');
        $config->setHydratorDir($doctrineFolder . '/Hydrators');
        $config->setHydratorNamespace('Hydrators');
        $config->setDefaultDB('doctrine_odm');
        $config->setMetadataDriverImpl(AnnotationDriver::create($rootPath . '/src/Document'));

        $client = new Client(
            'mongodb://mongo_rs_0:27018,mongo_rs_1:27019,mongo_rs_2:27020/awful-rbac-test?replicaSet=mongo_rs&readPreference=secondaryPreferred',
            [],
            ['typeMap' => DocumentManager::CLIENT_TYPEMAP]
        );

        $documentManager = DocumentManager::create($client, $config);

        parent::__construct($documentManager);
    }
}