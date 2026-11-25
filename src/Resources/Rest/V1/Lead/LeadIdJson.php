<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Lead;

final class LeadIdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/lead/{leadId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Lead',
        'querySerialization' => [
            'fields' => 'multi',
        ],
    ];

    /**
     * Get Lead by Id
     *
     * Retrieves a single lead record through its Marketo id. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(int $leadId, ?\MarketoSDK\GetParams\Rest\V1\Lead\LeadIdJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Lead $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['leadId' => $leadId], parameters: $params);
        return $result;
    }
}
