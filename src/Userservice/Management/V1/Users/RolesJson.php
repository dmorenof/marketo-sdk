<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users;

final class RolesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /userservice/management/v1/users/roles.json [operationId: getRolesUsingGET] */
    /**
     * Get Roles
     *
     * Retrieve list of all role records.  Required Permissions: Access User Management Api and Access Users
     */
    public static function get(): \MarketoSDK\Collections\Userservice\Management\V1\Users\RolesJson\Get\UsersRolesJsonCollection
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\RolesJson::class)->get();
    }
}
