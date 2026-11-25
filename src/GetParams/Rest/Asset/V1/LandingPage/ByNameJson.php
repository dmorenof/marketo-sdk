<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\LandingPage;

final class ByNameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'maxReturn' => 'maxReturn',
            'name' => 'name',
            'offset' => 'offset',
            'status' => 'status',
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

    public ?int $maxReturn {
        set {
            $this->assigning('maxReturn', $value);
            $this->maxReturn = $value;
        }
    }
    public string $name;
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    public ?\MarketoSDK\Enums\Rest\Asset\V1\LandingPage\ByNameJson\Get\Query\QueryStatusEnum $status;
}
