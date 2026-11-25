<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users;

final class RolesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/userservice/management/v1/users/roles.json',
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
        'responseType' => '\\MarketoSDK\\Collections\\Userservice\\Management\\V1\\Users\\RolesJson\\Get\\UsersRolesJsonCollection',
    ];

    /**
     * Get Roles
     *
     * Retrieve list of all role records.  Required Permissions: Access User Management Api and Access Users
     */
    public function get(): \MarketoSDK\Collections\Userservice\Management\V1\Users\RolesJson\Get\UsersRolesJsonCollection
    {
        /** @var \MarketoSDK\Collections\Userservice\Management\V1\Users\RolesJson\Get\UsersRolesJsonCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
