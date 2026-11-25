<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Form\ById;

final class UsedByJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
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
