<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users;

final class InviteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/userservice/management/v1/users/invite.json',
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
                'type' => 'string',
                'schemaNullable' => false,
            ],
            201 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\InviteUserRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Invite User
     *
     * Send an email invitation to new user.  Required Permissions: Access User Management Api and Access Users
     */
    public function post(\MarketoSDK\DTOs\InviteUserRequest $payload): ?string
    {
        /** @var ?string $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
