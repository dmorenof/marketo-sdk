<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName;

final class ApproveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/customobjects/schema/{apiName}/approve.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObjectType',
    ];

    /**
     * Approve Custom Object Type
     *
     * Approves the current draft of the type, and makes it the live version. This will delete the current live version of the type. Required Permissions: Read-Write Custom Object Type
     */
    public function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObjectType $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['apiName' => $apiName]);
        return $result;
    }

}
