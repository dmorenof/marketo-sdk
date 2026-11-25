<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\ByCustomObjectName;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/customobjects/{customObjectName}/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectMetaData',
    ];

    /**
     * Describe Custom Objects
     *
     * Returns metadata regarding a given custom object. Required Permissions: Read-Only Custom Object, Read-Write Custom Object
     */
    public function get(string $customObjectName): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectMetaData $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['customObjectName' => $customObjectName]);
        return $result;
    }
}
