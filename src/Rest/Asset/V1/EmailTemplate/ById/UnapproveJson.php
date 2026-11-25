<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplate\ById;

final class UnapproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/emailTemplate/{id}/unapprove.json [operationId: unapproveDraftUsingPOST_1] */
    /**
     * Unapprove Email Template Draft
     *
     * Unapproves the current approved version of the Email Template. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById\UnapproveJson::class)->post($id);
    }
}
