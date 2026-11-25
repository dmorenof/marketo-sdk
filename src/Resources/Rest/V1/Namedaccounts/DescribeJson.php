<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Namedaccounts;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/namedaccounts/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectMetaData',
    ];

    /**
     * Describe NamedAccounts
     *
     * Returns metadata about namedaccounts and the fields available for interaction via the API. Required Permissions: Read-Only Named Account, Read-Write Named Account
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectMetaData $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
