<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid;

final class InviteJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/userservice/management/v1/users/{userid}/invite.json',
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
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\InvitedUser',
    ];

    /**
     * Get Invited User by Id
     *
     * Retrieve a single pending user record through its Id.  A pending user is a user that has not yet accepted invitation.  Required Permissions: Access User Management Api and Access Users
     */
    public function get(string $userid): \MarketoSDK\DTOs\ResponseOf\InvitedUser
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\InvitedUser $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['userid' => $userid]);
        return $result;
    }
}
