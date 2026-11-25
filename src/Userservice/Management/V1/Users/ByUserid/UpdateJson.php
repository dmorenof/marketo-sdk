<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users\ByUserid;

final class UpdateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /userservice/management/v1/users/{userid}/update.json [operationId: updateUserAttributeUsingPOST] */
    /**
     * Update User Attributes
     *
     * Update one or more user attributes.  Required Permissions: Access User Management Api and Access Users
     */
    public static function post(string $userid, \MarketoSDK\DTOs\Update\UserAttributes\Request $payload): ?\MarketoSDK\DTOs\ResponseOf\User
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\UpdateJson::class)->post($userid, $payload);
    }

}
