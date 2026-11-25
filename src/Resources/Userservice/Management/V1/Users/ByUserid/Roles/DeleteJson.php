<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\Roles;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/userservice/management/v1/users/{userid}/roles/delete.json',
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
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\Roles\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete Roles
     *
     * Delete roles from user.  Required Permissions: Access User Management Api and Access Users
     */
    public function post(string $userid, \MarketoSDK\DTOs\Delete\Roles\Request $payload): \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection
    {
        /** @var \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['userid' => $userid]);
        return $result;
    }
}
