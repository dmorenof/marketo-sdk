<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid;

final class UserJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/userservice/management/v1/users/{userid}/user.json',
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
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\User',
    ];

    /**
     * Get User by Id
     *
     * Retrieve a single user record through its Id.  Required Permissions: Access User Management Api and Access Users
     */
    public function get(string $userid): \MarketoSDK\DTOs\ResponseOf\User
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\User $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['userid' => $userid]);
        return $result;
    }

}
