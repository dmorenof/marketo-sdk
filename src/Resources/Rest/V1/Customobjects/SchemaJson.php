<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects;

final class SchemaJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/customobjects/schema.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectMetaData',
        'querySerialization' => [
            'names' => 'multi',
        ],
    ];

    /**
     * List Custom Object Types
     *
     * Returns a list of Custom Object Types available in the target instance, along with id, deduplication, relationship, and field information for each type. Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public function get(?\MarketoSDK\GetParams\Rest\V1\Customobjects\SchemaJson $params = null): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectMetaData $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/customobjects/schema.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObjectType',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\CustomObjectType\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync Custom Object Type
     *
     * Inserts, updates, or upserts custom object type record to the target instance. Required Permissions: Read-Write Custom Object Type
     */
    public function post(\MarketoSDK\DTOs\Sync\CustomObjectType\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObjectType $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
