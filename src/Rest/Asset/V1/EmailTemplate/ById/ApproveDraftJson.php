<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplate\ById;

final class ApproveDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/emailTemplate/{id}/approveDraft.json [operationId: approveDraftUsingPOST_1] */
    /**
     * Approve Email Template Draft
     *
     * Approves the current draft of the email template. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById\ApproveDraftJson::class)->post($id);
    }
}
