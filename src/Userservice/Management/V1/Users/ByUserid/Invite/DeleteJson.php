<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users\ByUserid\Invite;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /userservice/management/v1/users/{userid}/invite/delete.json [operationId: deleteInvitedUserUsingPOST] */
    /**
     * Delete Invited User
     *
     * Delete pending user.  A pending user is a user that has not yet accepted invitation.  Required Permissions: Access User Management Api and Access Users
     */
    public static function post(string $userid): void
    {
        self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\ByUserid\Invite\DeleteJson::class)->post($userid);
    }

}
