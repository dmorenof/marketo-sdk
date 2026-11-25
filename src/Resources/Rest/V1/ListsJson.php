<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class ListsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/lists.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\StaticList',
        'querySerialization' => [
            'id' => 'multi',
            'name' => 'multi',
            'programName' => 'multi',
            'workspaceName' => 'multi',
        ],
    ];

    /**
     * Get Lists
     *
     * Returns a set of static list records based on given filter parameters. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(?\MarketoSDK\GetParams\Rest\V1\ListsJson $params = null): \MarketoSDK\DTOs\ResponseOf\StaticList
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\StaticList $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
