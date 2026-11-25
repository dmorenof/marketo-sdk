<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Leads\ByLeadId;

final class SmartCampaignMembershipJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'batchSize' => 'batchSize',
            'earliestUpdatedAt' => 'earliestUpdatedAt',
            'latestUpdatedAt' => 'latestUpdatedAt',
            'nextPageToken' => 'nextPageToken',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'batchSize' => [
            'format' => 'int32',
        ],
    ];

    public ?int $batchSize {
        set {
            $this->assigning('batchSize', $value);
            $this->batchSize = $value;
        }
    }
    public ?string $earliestUpdatedAt;
    public ?string $latestUpdatedAt;
    public ?string $nextPageToken;
}
