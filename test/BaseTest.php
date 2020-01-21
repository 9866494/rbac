<?php
declare(strict_types=1);

namespace Awful85\Rbac\Test;

use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{
    /**
     * @var TestContainer
     */
    private $container;

    protected function setUp(): void
    {
        parent::setUp();

        $this->container = new TestContainer();
    }

}