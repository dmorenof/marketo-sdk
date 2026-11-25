<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid;

final class UpdateJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/userservice/management/v1/users/{userid}/update.json',
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
                'type' => '\\MarketoSDK\\DTOs\\ResponseOf\\User',
                'schemaNullable' => false,
            ],
            201 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\UserAttributes\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update User Attributes
     *
     * Update one or more user attributes.  Required Permissions: Access User Management Api and Access Users
     */
    public function post(string $userid, \MarketoSDK\DTOs\Update\UserAttributes\Request $payload): ?\MarketoSDK\DTOs\ResponseOf\User
    {
        /** @var ?\MarketoSDK\DTOs\ResponseOf\User $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['userid' => $userid]);
        return $result;
    }
}
