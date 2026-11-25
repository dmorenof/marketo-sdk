<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects;

final class CustomObjectNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/customobjects/{customObjectName}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObject',
        'querySerialization' => [
            'fields' => 'multi',
            'filterValues' => 'multi',
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\LookupCustomObjectRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get Custom Objects
     *
     * Retrieves a list of custom objects records based on filter and set of values. There are two unique types of requests for this endpoint: one is executed normally using a GET with URL parameters, the other is by passing a JSON object in the body of a POST and specifying _method=GET in the querystring. The latter is used when dedupeFields attribute has more than one field, which is known as a "compound key". Required Permissions: Read-Only Custom Object, Read-Write Custom Object
     */
    public function get(string $customObjectName, \MarketoSDK\GetParams\Rest\V1\Customobjects\CustomObjectNameJson $params): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObject $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['customObjectName' => $customObjectName], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/customobjects/{customObjectName}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObject',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\CustomObject\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync Custom Objects
     *
     * Inserts, updates, or upserts custom object records to the target instance. Required Permissions: Read-Write Custom Object
     */
    public function post(string $customObjectName, \MarketoSDK\DTOs\Sync\CustomObject\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObject $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['customObjectName' => $customObjectName]);
        return $result;
    }
}
