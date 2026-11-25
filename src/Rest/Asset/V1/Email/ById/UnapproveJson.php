<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById;

final class UnapproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/unapprove.json [operationId: unapproveDraftUsingPOST] */
    /**
     * Unapprove Email
     *
     * Unapproves the email and reverts it to a draft-only state. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\UnapproveJson::class)->post($id);
    }

}
