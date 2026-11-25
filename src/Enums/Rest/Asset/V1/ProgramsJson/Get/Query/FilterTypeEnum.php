<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Rest\Asset\V1\ProgramsJson\Get\Query;

enum FilterTypeEnum: string
{
    case FolderId = 'folderId';
    case Id = 'id';
    case ProgramId = 'programId';
    case Workspace = 'workspace';
}
