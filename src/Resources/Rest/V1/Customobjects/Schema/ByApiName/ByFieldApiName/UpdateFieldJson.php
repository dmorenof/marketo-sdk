<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\ByFieldApiName;

final class UpdateFieldJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/customobjects/schema/{apiName}/{fieldApiName}/updateField.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObjectType',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\CustomObjectTypeField\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Custom Object Type Field
     *
     * Updates a field in custom object type. Required Permissions: Read-Write Custom Object Type
     */
    public function post(\MarketoSDK\PathParams\Rest\V1\Customobjects\Schema\ByApiName\ByFieldApiName\UpdateFieldJson $identifier, \MarketoSDK\DTOs\Update\CustomObjectTypeField\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObjectType $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }

}
