<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users\ByUserid;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /userservice/management/v1/users/{userid}/delete.json [operationId: deleteUserUsingPOST] */
    /**
     * Delete User
     *
     * Delete user.  Required Permissions: Access User Management Api and Access Users
     */
    public static function post(string $userid): void
    {
        self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\DeleteJson::class)->post($userid);
    }

}
