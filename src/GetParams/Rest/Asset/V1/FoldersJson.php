<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1;

final class FoldersJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'maxDepth' => 'maxDepth',
            'maxReturn' => 'maxReturn',
            'offset' => 'offset',
            'root' => 'root',
            'workSpace' => 'workSpace',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'maxDepth' => [
            'format' => 'int32',
        ],
        'maxReturn' => [
            'format' => 'int32',
        ],
        'offset' => [
            'format' => 'int32',
        ],
    ];

    public ?int $maxDepth {
        set {
            $this->assigning('maxDepth', $value);
            $this->maxDepth = $value;
        }
    }
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
    public ?string $root;
    public ?string $workSpace;
}
