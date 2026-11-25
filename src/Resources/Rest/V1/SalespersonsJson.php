<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class SalespersonsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/salespersons.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SalesPerson',
        'querySerialization' => [
            'fields' => 'multi',
            'filterValues' => 'csv',
        ],
    ];

    /**
     * Get SalesPersons
     *
     * Retrieves salesperson records from the destination instance based on the submitted filter. Required Permissions: Read-Only Sales Person, Read-Write Sales Person
     */
    public function get(\MarketoSDK\GetParams\Rest\V1\SalespersonsJson $params): \MarketoSDK\DTOs\ResponseOf\SalesPerson
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SalesPerson $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/salespersons.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SalesPerson',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\SalesPerson\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync SalesPersons
     *
     * Allows inserts, updates, or upserts of salespersons to the target instance. Required Permissions: Read-Write Sales Person
     */
    public function post(\MarketoSDK\DTOs\Sync\SalesPerson\Request $payload): \MarketoSDK\DTOs\ResponseOf\SalesPerson
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SalesPerson $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
