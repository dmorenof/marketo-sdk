<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Companies;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/companies/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectMetaData',
    ];

    /**
     * Describe Companies
     *
     * Returns metadata about companies and the fields available for interaction via the API. Required Permissions: Read-Only Company, Read-Write Company
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectMetaData $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
