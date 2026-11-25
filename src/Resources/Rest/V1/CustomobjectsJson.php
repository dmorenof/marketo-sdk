<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class CustomobjectsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/customobjects.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectMetaData',
        'querySerialization' => [
            'names' => 'multi',
        ],
    ];

    /**
     * List Custom Objects
     *
     * Returns a list of Custom Object types available in the target instance, along with id and deduplication information for each type. Required Permissions: Read-Only Custom Object, Read-Write Custom Object
     */
    public function get(?\MarketoSDK\GetParams\Rest\V1\CustomobjectsJson $params = null): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectMetaData $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
