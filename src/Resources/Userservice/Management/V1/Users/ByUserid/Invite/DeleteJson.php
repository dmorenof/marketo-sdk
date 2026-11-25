<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\Invite;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/userservice/management/v1/users/{userid}/invite/delete.json',
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
    ];

    /**
     * Delete Invited User
     *
     * Delete pending user.  A pending user is a user that has not yet accepted invitation.  Required Permissions: Access User Management Api and Access Users
     */
    public function post(string $userid): void
    {
        $this->executeArguments(self::operation(self::POST), path: ['userid' => $userid]);
        return;
    }
}
