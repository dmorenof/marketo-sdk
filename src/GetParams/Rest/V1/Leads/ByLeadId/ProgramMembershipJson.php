<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Leads\ByLeadId;

final class ProgramMembershipJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'batchSize' => 'batchSize',
            'earliestUpdatedAt' => 'earliestUpdatedAt',
            'filterType' => 'filterType',
            'filterValues' => 'filterValues',
            'latestUpdatedAt' => 'latestUpdatedAt',
            'nextPageToken' => 'nextPageToken',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'batchSize' => [
            'format' => 'int32',
        ],
        'filterValues' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    public ?int $batchSize {
        set {
            $this->assigning('batchSize', $value);
            $this->batchSize = $value;
        }
    }
    public ?string $earliestUpdatedAt;
    public ?string $filterType;
    /** @var list<string>|null */
    public ?array $filterValues;
    public ?string $latestUpdatedAt;
    public ?string $nextPageToken;
}
