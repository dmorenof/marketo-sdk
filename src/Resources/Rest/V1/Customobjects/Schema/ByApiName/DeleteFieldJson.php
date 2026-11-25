<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName;

final class DeleteFieldJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/customobjects/schema/{apiName}/deleteField.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObjectType',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\CustomObjectTypeFields\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete Custom Object Type Fields
     *
     * Deletes fields from custom object type. Required Permissions: Read-Write Custom Object Type
     */
    public function post(string $apiName, \MarketoSDK\DTOs\Delete\CustomObjectTypeFields\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObjectType $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['apiName' => $apiName]);
        return $result;
    }
}
