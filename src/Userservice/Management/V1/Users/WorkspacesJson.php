<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users;

final class WorkspacesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /userservice/management/v1/users/workspaces.json [operationId: getWorkspacesUsingGET] */
    /**
     * Get Workspaces
     *
     * Retrieve list of workspace records.  Required Permissions: Access User Management Api and Access Users
     */
    public static function get(): \MarketoSDK\Collections\Userservice\Management\V1\Users\WorkspacesJson\Get\UsersWorkspacesJsonCollection
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\WorkspacesJson::class)->get();
    }
}
