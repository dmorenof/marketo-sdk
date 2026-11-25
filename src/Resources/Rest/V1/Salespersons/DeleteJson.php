<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Salespersons;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/salespersons/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SalesPerson',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\SalesPerson\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete SalesPersons
     *
     * Deletes a list of salesperson records from the target instance. Input records should have only one member, based on the value of 'dedupeBy'. Required Permissions: Read-Write Sales Person
     */
    public function post(\MarketoSDK\DTOs\Delete\SalesPerson\Request $payload): \MarketoSDK\DTOs\ResponseOf\SalesPerson
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SalesPerson $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
