<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate\State;

final class Transition extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate/state/transition [operationId: stateTransitionUsingPOST_emailtemplate] */
    /**
     * Update Email Template Status
     *
     * Performs a state transition on an email template. Required Permissions: Read-Write Assets, Access Design Studio, Approve Email Template.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\State\Transition $params): \MarketoSDK\DTOs\Email\TemplateNew\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\State\Transition::class)->post($params);
    }

}
