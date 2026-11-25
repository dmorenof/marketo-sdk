<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/customobjects/schema/{apiName}/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectMetaData',
    ];

    /**
     * Describe Custom Object Type
     *
     * Returns metadata regarding a given custom object type (including relationships and fields). Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public function get(string $apiName, ?\MarketoSDK\GetParams\Rest\V1\Customobjects\Schema\ByApiName\DescribeJson $params = null): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectMetaData $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['apiName' => $apiName], parameters: $params);
        return $result;
    }
}
