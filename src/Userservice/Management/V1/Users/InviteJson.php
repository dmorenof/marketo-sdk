<?php

declare(strict_types=1);

namespace MarketoSDK\Userservice\Management\V1\Users;

final class InviteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /userservice/management/v1/users/invite.json [operationId: inviteUserUsingPOST] */
    /**
     * Invite User
     *
     * Send an email invitation to new user.  Required Permissions: Access User Management Api and Access Users
     */
    public static function post(\MarketoSDK\DTOs\InviteUserRequest $payload): ?string
    {
        return self::client()->resource(\MarketoSDK\Resources\Userservice\Management\V1\Users\InviteJson::class)->post($payload);
    }
}
