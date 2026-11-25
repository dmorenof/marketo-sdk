<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid;

final class RolesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/userservice/management/v1/users/{userid}/roles.json',
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
        'responseType' => '\\MarketoSDK\\Collections\\ResponseOf\\AllUsers\\RoleWorkspacesCollection',
    ];

    /**
     * Get Roles and Workspaces by Id
     *
     * Get roles and workspaces for a given user.  Required Permissions: Access User Management Api and Access Users
     */
    public function get(string $userid): \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection
    {
        /** @var \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['userid' => $userid]);
        return $result;
    }

}
