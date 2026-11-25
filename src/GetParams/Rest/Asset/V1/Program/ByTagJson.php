<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Program;

final class ByTagJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'tagType',
        'tagValue',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'maxReturn' => 'maxReturn',
            'offset' => 'offset',
            'tagType' => 'tagType',
            'tagValue' => 'tagValue',
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
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    public string $tagType;
    public string $tagValue;
}
