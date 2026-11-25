<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class CompaniesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/companies.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Company',
        'querySerialization' => [
            'fields' => 'multi',
            'filterValues' => 'multi',
        ],
    ];

    /**
     * Get Companies
     *
     * Retrieves company records from the destination instance based on the submitted filter. Required Permissions: Read-Only Company, Read-Write Company
     */
    public function get(\MarketoSDK\GetParams\Rest\V1\CompaniesJson $params): \MarketoSDK\DTOs\ResponseOf\Company
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Company $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/companies.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Company',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\Company\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync Companies
     *
     * Allows inserting, updating, or upserting of company records into Marketo. Required Permissions: Read-Write Company
     */
    public function post(\MarketoSDK\DTOs\Sync\Company\Request $payload): \MarketoSDK\DTOs\ResponseOf\Company
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Company $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
