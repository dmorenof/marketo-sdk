<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\ByCustomObjectName;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/customobjects/{customObjectName}/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObject',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\CustomObject\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete Custom Objects
     *
     * Deletes a given set of custom object records. Required Permissions: Read-Write Custom Object
     */
    public function post(string $customObjectName, ?\MarketoSDK\DTOs\Delete\CustomObject\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObject $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['customObjectName' => $customObjectName]) : $this->executeArguments(self::operation(self::POST), path: ['customObjectName' => $customObjectName]);
        return $result;
    }
}
