<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users\ByUserid;

final class RolesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /userservice/management/v1/users/{userid}/roles.json [operationId: getUserRolesAndWorkspacesUsingGET] */
    /**
     * Get Roles and Workspaces by Id
     *
     * Get roles and workspaces for a given user.  Required Permissions: Access User Management Api and Access Users
     */
    public static function get(string $userid): \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\RolesJson::class)->get($userid);
    }
}
