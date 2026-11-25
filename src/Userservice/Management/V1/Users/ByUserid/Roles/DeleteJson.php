<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users\ByUserid\Roles;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /userservice/management/v1/users/{userid}/roles/delete.json [operationId: deleteRolesUsingPOST] */
    /**
     * Delete Roles
     *
     * Delete roles from user.  Required Permissions: Access User Management Api and Access Users
     */
    public static function post(string $userid, \MarketoSDK\DTOs\Delete\Roles\Request $payload): \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\Roles\DeleteJson::class)->post($userid, $payload);
    }
}
