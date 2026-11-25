<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Email\State;

final class Transition extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/email/state/transition [operationId: stateTransitionUsingPOST_email] */
    /**
     * Update Email Status
     *
     * Performs a state transition on an email. Required Permissions: Read-Write Assets, Access Design Studio, Approve Email.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Email\State\Transition $params): \MarketoSDK\DTOs\EmailNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email\State\Transition::class)->post($params);
    }
}
