<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities\External\Type;

final class ApiNameJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/activities/external/type/{apiName}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivityType',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CustomActivity\\Type\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Custom Activity Type
     *
     * Updates the target custom activity type. All changes are applied to the draft version of the type. Required Permissions: Read-Write Activity Metadata
     */
    public function post(string $apiName, \MarketoSDK\DTOs\CustomActivity\Type\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivityType $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['apiName' => $apiName]);
        return $result;
    }

}
