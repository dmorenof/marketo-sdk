<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users;

final class AllusersJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/userservice/management/v1/users/allusers.json',
        'errors' => [
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\MarketoSDK\\Collections\\Userservice\\Management\\V1\\Users\\AllusersJson\\Get\\UsersAllusersJsonCollection',
    ];

    /**
     * Get Users
     *
     * Retrieve a list of all user records.  Required Permissions: Access User Management Api and Access Users
     */
    public function get(?\MarketoSDK\GetParams\Userservice\Management\V1\Users\AllusersJson $params = null): \MarketoSDK\Collections\Userservice\Management\V1\Users\AllusersJson\Get\UsersAllusersJsonCollection
    {
        /** @var \MarketoSDK\Collections\Userservice\Management\V1\Users\AllusersJson\Get\UsersAllusersJsonCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
