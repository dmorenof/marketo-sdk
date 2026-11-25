<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users;

final class AllusersJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /userservice/management/v1/users/allusers.json [operationId: getUsersUsingGET] */
    /**
     * Get Users
     *
     * Retrieve a list of all user records.  Required Permissions: Access User Management Api and Access Users
     */
    public static function get(?\MarketoSDK\GetParams\Userservice\Management\V1\Users\AllusersJson $params = null): \MarketoSDK\Collections\Userservice\Management\V1\Users\AllusersJson\Get\UsersAllusersJsonCollection
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\AllusersJson::class)->get($params);
    }
}
