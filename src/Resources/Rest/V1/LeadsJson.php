<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class LeadsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Lead',
        'querySerialization' => [
            'fields' => 'multi',
            'filterValues' => 'multi',
        ],
    ];

    /**
     * Get Leads by Filter Type
     *
     * Returns a list of up to 300 leads based on a list of values in a particular field. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(\MarketoSDK\GetParams\Rest\V1\LeadsJson $params): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Lead $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Lead',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\Lead\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync Leads
     *
     * Syncs a list of leads to the target instance. Required Permissions: Read-Write Lead
     */
    public function post(\MarketoSDK\DTOs\Sync\Lead\Request $payload): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Lead $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
