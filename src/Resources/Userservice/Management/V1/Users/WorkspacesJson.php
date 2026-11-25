<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users;

final class WorkspacesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/userservice/management/v1/users/workspaces.json',
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
        'responseType' => '\\MarketoSDK\\Collections\\Userservice\\Management\\V1\\Users\\WorkspacesJson\\Get\\UsersWorkspacesJsonCollection',
    ];

    /**
     * Get Workspaces
     *
     * Retrieve list of workspace records.  Required Permissions: Access User Management Api and Access Users
     */
    public function get(): \MarketoSDK\Collections\Userservice\Management\V1\Users\WorkspacesJson\Get\UsersWorkspacesJsonCollection
    {
        /** @var \MarketoSDK\Collections\Userservice\Management\V1\Users\WorkspacesJson\Get\UsersWorkspacesJsonCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
