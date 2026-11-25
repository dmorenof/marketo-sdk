<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users\ByUserid;

final class UserJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /userservice/management/v1/users/{userid}/user.json [operationId: getUserUsingGET] */
    /**
     * Get User by Id
     *
     * Retrieve a single user record through its Id.  Required Permissions: Access User Management Api and Access Users
     */
    public static function get(string $userid): \MarketoSDK\DTOs\ResponseOf\User
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\UserJson::class)->get($userid);
    }

}
