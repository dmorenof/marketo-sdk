<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1;

final class FormsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'folder' => 'folder',
        'maxReturn' => 'maxReturn',
        'offset' => 'offset',
        'status' => 'status',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'maxReturn' => [
        'format' => 'int32',
    ],
];

    public ?string $folder;
    public ?int $maxReturn {
        set {
            $this->assigning('maxReturn', $value);
            $this->maxReturn = $value;
        }
    }
    public ?string $offset;
    public ?\MarketoSDK\Enums\Rest\Asset\V1\FormsJson\Get\Query\QueryStatusEnum $status;
}
