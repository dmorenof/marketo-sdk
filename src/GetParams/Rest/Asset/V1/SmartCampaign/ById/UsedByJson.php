<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById;

final class UsedByJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'maxReturn' => 'maxReturn',
            'offset' => 'offset',
            'order' => 'order',
            'query' => 'query',
            'sortByColumn' => 'sortByColumn',
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
    public ?\MarketoSDK\Enums\Rest\Asset\V1\SmartCampaign\ById\UsedByJson\Get\Query\QueryOrderEnum $order;
    public ?string $query;
    public ?\MarketoSDK\Enums\Rest\Asset\V1\SmartCampaign\ById\UsedByJson\Get\Query\ByColumnEnum $sortByColumn;
}
