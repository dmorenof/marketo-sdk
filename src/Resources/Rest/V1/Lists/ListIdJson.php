<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Lists;

final class ListIdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/lists/{listId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\StaticList',
        'validation' => [
            'listId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get List by Id
     *
     * Returns a list record by its id. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(int $listId): \MarketoSDK\DTOs\ResponseOf\StaticList
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\StaticList $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['listId' => $listId]);
        return $result;
    }

}
