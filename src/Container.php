<?php
declare(strict_types=1);

namespace Awful85\Rbac;

use Awful85\Rbac\Container\NotFoundException;
use Awful85\Rbac\Service\Auth;
use Doctrine\ODM\MongoDB\DocumentManager;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class Container implements ContainerInterface
{
    /**
     * @var Auth
     */
    private $authService;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var DocumentManager
     */
    private $documentManager;

    private $services = [];

    /**
     * Container constructor.
     * @param DocumentManager $documentManager
     * @param LoggerInterface $logger
     */
    public function __construct(DocumentManager $documentManager, ?LoggerInterface $logger = null)
    {
        $this->logger = $logger ?? new NullLogger();
        $this->authService = new Auth($this);
        $this->documentManager = $documentManager;
    }

    public function getAuthService(): Auth
    {
        return $this->authService;
    }

    public function setLogger(LoggerInterface $logger): ContainerInterface
    {
        $this->logger;
        return $this;
    }

    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    public function get($id)
    {
        if (!isset($this->services[$id])) {
            throw new NotFoundException();
        } else {
            return $this->services[$id];
        }
    }

    public function has($id)
    {
        return isset($this->services[$id]);
    }

    public function getDocumentManager(): DocumentManager
    {
        return $this->documentManager;
    }

}