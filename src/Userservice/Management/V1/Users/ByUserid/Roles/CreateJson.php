<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users\ByUserid\Roles;

final class CreateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /userservice/management/v1/users/{userid}/roles/create.json [operationId: addRolesUsingPOST] */
    /**
     * Add Roles
     *
     * Add roles to a user.  Required Permissions: Access User Management Api and Access Users
     */
    public static function post(string $userid, \MarketoSDK\DTOs\Add\Roles\Request $payload): ?\MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\Roles\CreateJson::class)->post($userid, $payload);
    }
}
