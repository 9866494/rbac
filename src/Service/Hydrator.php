<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service;

use Awful85\Rbac\Document\BooleanPermission as BooleanPermissionDocument;
use Awful85\Rbac\Document\DatePermission as DatePermissionDocument;
use Awful85\Rbac\Document\DateTimePermission as DateTimePermissionDocument;
use Awful85\Rbac\Document\FloatPermission as FloatPermissionDocument;
use Awful85\Rbac\Document\IntegerPermission as IntegerPermissionDocument;
use Awful85\Rbac\Document\Permission as PermissionDocument;
use Awful85\Rbac\Document\TimePermission as TimePermissionDocument;
use Awful85\Rbac\Service\Permission\Dto\Permission as PermissionDto;
use Awful85\Rbac\Service\Permission\Dto\BooleanPermission as BooleanPermissionDto;
use Awful85\Rbac\Service\Permission\Dto\DatePermission as DatePermissionDto;
use Awful85\Rbac\Service\Permission\Dto\DateTimePermission as DateTimePermissionDto;
use Awful85\Rbac\Service\Permission\Dto\FloatPermission as FloatPermissionDto;
use Awful85\Rbac\Service\Permission\Dto\TimePermission as TimePermissionDto;
use Awful85\Rbac\Service\Permission\Dto\IntegerPermission as IntegerPermissionDto;

class Hydrator extends BaseService
{
    /**
     * @param PermissionDto $permissionDto
     * @param PermissionDocument|null $permissionDocument
     * @return PermissionDocument
     */
    public function hydratePermissionDtoToDocument(PermissionDto $permissionDto, ?PermissionDocument $permissionDocument): PermissionDocument
    {
        switch (get_class($permissionDto)) {
            case (IntegerPermissionDto::class):
                $permissionDocument = $permissionDocument ?? new IntegerPermissionDocument();
                $this->getDocumentManager()->getHydratorFactory()->hydrate($permissionDocument, $permissionDto->toArray());
                break;
            case (FloatPermissionDto::class):
                $permissionDocument = $permissionDocument ?? new FloatPermissionDocument();
                $this->getDocumentManager()->getHydratorFactory()->hydrate($permissionDocument, $permissionDto->toArray());
                break;
            case (BooleanPermissionDto::class):
                $permissionDocument = $permissionDocument ?? new BooleanPermissionDocument();
                $this->getDocumentManager()->getHydratorFactory()->hydrate($permissionDocument, $permissionDto->toArray());
                break;
            case (DateTimePermissionDto::class):
                $permissionDocument = $permissionDocument ?? new DateTimePermissionDocument();
                $this->getDocumentManager()->getHydratorFactory()->hydrate($permissionDocument, $permissionDto->toArray());
                break;
            case (DatePermissionDto::class):
                $permissionDocument = $permissionDocument ?? new DatePermissionDocument();
                $this->getDocumentManager()->getHydratorFactory()->hydrate($permissionDocument, $permissionDto->toArray());
                break;
            case (TimePermissionDto::class):
                $permissionDocument = $permissionDocument ?? new TimePermissionDocument();
                $this->getDocumentManager()->getHydratorFactory()->hydrate($permissionDocument, $permissionDto->toArray());
                break;
            default:
        }

        return $permissionDocument;
    }
}