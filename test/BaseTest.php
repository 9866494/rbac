<?php
declare(strict_types=1);

namespace Awful85\Rbac\Test;

use Awful85\Rbac\ContainerInterface;
use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{
    /**
     * @var TestContainer
     */
    private $container;

    /**
     * @var string
     */
    private $jsonFixtureRoot;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setContainer(new TestContainer());

        $this->getContainer()->getDocumentManager()->getSchemaManager()->dropCollections();
        $this->getContainer()->getDocumentManager()->getSchemaManager()->dropDatabases();
        $this->getContainer()->getDocumentManager()->getSchemaManager()->ensureIndexes();

        $this->jsonFixtureRoot = realpath(__DIR__) .'/fixtures/';
    }

    public function loadFixture(string $name): string
    {
        return file_get_contents($this->jsonFixtureRoot . $name . '.json');
    }

    public function loadJsonFixture(string $name): \stdClass
    {
        return json_decode(file_get_contents($this->jsonFixtureRoot . $name . '.json'));
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }

    /**
     * @param ContainerInterface $container
     * @return BaseTest
     */
    public function setContainer(ContainerInterface $container): BaseTest
    {
        $this->container = $container;
        return $this;
    }

}