<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/activities/external/type/{apiName}/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivityType',
    ];

    /**
     * Describe Custom Activity Type
     *
     * Returns metadata for a specific custom activity type. Required Permissions: Read-Only Activity Metadata, Read-Write Activity Metadata
     */
    public function get(string $apiName, ?\MarketoSDK\GetParams\Rest\V1\Activities\External\Type\ByApiName\DescribeJson $params = null): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivityType $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['apiName' => $apiName], parameters: $params);
        return $result;
    }

}
