<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Opportunities;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/opportunities/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectMetaData',
    ];

    /**
     * Describe Opportunity
     *
     * Returns object and field metadata for Opportunity type records in the target instance. Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectMetaData $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
