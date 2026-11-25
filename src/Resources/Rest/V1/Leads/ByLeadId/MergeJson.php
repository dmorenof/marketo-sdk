<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads\ByLeadId;

final class MergeJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads/{leadId}/merge.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseWithoutResult',
        'querySerialization' => [
            'leadIds' => 'multi',
        ],
    ];

    /**
     * Merge Leads
     *
     * Merges two or more known lead records into a single lead record. Required Permissions: Read-Write Lead
     */
    public function post(int $leadId, ?\MarketoSDK\PostParams\Rest\V1\Leads\ByLeadId\MergeJson $params = null): \MarketoSDK\DTOs\ResponseWithoutResult
    {
        /** @var \MarketoSDK\DTOs\ResponseWithoutResult $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['leadId' => $leadId], parameters: $params);
        return $result;
    }

}
