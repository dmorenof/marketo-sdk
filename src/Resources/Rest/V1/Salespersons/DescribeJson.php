<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Salespersons;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/salespersons/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectMetaData',
    ];

    /**
     * Describe SalesPersons
     *
     * Returns metadata about salespersons and the fields available for interaction via the API. Required Permissions: Read-Only Sales Person, Read-Write Sales Person
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectMetaData $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
