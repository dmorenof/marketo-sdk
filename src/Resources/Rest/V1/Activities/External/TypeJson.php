<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities\External;

final class TypeJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/activities/external/type.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivityType',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CustomActivity\\Type\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Custom Activity Type
     *
     * Creates a new custom activity type draft in the target instance. Required Permissions: Read-Write Activity Metadata
     */
    public function post(\MarketoSDK\DTOs\CustomActivity\Type\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivityType $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
