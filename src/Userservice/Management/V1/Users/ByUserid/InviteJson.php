<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users\ByUserid;

final class InviteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /userservice/management/v1/users/{userid}/invite.json [operationId: getInvitedUserUsingGET] */
    /**
     * Get Invited User by Id
     *
     * Retrieve a single pending user record through its Id.  A pending user is a user that has not yet accepted invitation.  Required Permissions: Access User Management Api and Access Users
     */
    public static function get(string $userid): \MarketoSDK\DTOs\ResponseOf\InvitedUser
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\InviteJson::class)->get($userid);
    }
}
