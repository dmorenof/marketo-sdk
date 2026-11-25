<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\V1\Leads\ByLeadId;

final class MergeJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'leadId' => 'leadId',
            'leadIds' => 'leadIds',
            'mergeInCRM' => 'mergeInCRM',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'leadIds' => [
            'items' => [
                'type' => 'int',
                'rules' => [],
            ],
        ],
    ];

    public ?int $leadId;
    /** @var list<int>|null */
    public ?array $leadIds;
    public ?bool $mergeInCRM;
}
