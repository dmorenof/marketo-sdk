<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class OpportunitiesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/opportunities.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObject',
        'querySerialization' => [
            'fields' => 'multi',
            'filterValues' => 'multi',
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\LookupCustomObjectRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get Opportunities
     *
     * Returns a list of opportunities based on a filter and set of values. Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity
     */
    public function get(\MarketoSDK\GetParams\Rest\V1\OpportunitiesJson $params): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObject $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/opportunities.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObject',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\CustomObject\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync Opportunities
     *
     * Allows inserting, updating, or upserting of opportunity records into the target instance. Required Permissions: Read-Write Named Opportunity
     */
    public function post(\MarketoSDK\DTOs\Sync\CustomObject\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObject $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
