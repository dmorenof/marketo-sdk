<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName\Attributes;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/activities/external/type/{apiName}/attributes/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivityType',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CustomActivity\\TypeAttribute\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete Custom Activity Type Attributes
     *
     * Deletes the target attributes from the custom activity type draft. The apiName of each attribute is the primary key for the update. Required Permissions: Read-Write Activity Metadata
     */
    public function post(string $apiName, \MarketoSDK\DTOs\CustomActivity\TypeAttribute\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivityType $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['apiName' => $apiName]);
        return $result;
    }
}
