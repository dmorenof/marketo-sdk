<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName\Attributes;

final class CreateJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/activities/external/type/{apiName}/attributes/create.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivityType',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CustomActivity\\TypeAttribute\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Custom Activity Type Attributes
     *
     * Adds activity attributes to the target type. These are added to the draft version of the type. Required Permissions: Read-Write Activity Metadata
     */
    public function post(string $apiName, \MarketoSDK\DTOs\CustomActivity\TypeAttribute\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivityType $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['apiName' => $apiName]);
        return $result;
    }
}
