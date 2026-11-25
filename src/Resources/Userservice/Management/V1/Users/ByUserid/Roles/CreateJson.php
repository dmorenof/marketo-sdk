<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\Roles;

final class CreateJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/userservice/management/v1/users/{userid}/roles/create.json',
        'success' => [
            200,
            201,
        ],
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
        'responseTypes' => [
            200 => [
                'type' => '\\MarketoSDK\\Collections\\ResponseOf\\AllUsers\\RoleWorkspacesCollection',
                'schemaNullable' => false,
            ],
            201 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Add\\Roles\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Roles
     *
     * Add roles to a user.  Required Permissions: Access User Management Api and Access Users
     */
    public function post(string $userid, \MarketoSDK\DTOs\Add\Roles\Request $payload): ?\MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection
    {
        /** @var ?\MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['userid' => $userid]);
        return $result;
    }
}
