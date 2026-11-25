<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/customobjects/schema/{apiName}/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObjectType',
    ];

    /**
     * Delete Custom Object Type
     *
     * Deletes the target custom object type. The type must first be removed from use by any assets, such as triggers or filters. Required Permissions: Read-Write Custom Object Type
     */
    public function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObjectType $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['apiName' => $apiName]);
        return $result;
    }
}
