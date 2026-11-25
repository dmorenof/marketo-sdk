<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1;

final class SmartCampaignsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'earliestUpdatedAt' => 'earliestUpdatedAt',
        'folder' => 'folder',
        'isActive' => 'isActive',
        'latestUpdatedAt' => 'latestUpdatedAt',
        'maxReturn' => 'maxReturn',
        'offset' => 'offset',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'maxReturn' => [
        'format' => 'int32',
    ],
    'offset' => [
        'format' => 'int32',
    ],
];

    public ?string $earliestUpdatedAt;
    public ?string $folder;
    public ?bool $isActive;
    public ?string $latestUpdatedAt;
    public ?int $maxReturn {
        set {
            $this->assigning('maxReturn', $value);
            $this->maxReturn = $value;
        }
    }
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
}
