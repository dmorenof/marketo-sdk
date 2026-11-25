<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\EmailTemplate\ById;

final class DiscardDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/emailTemplate/{id}/discardDraft.json [operationId: discardDraftUsingPOST_1] */
    /**
     * Discard Email Template Draft
     *
     * Discards the current draft of the email template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById\DiscardDraftJson::class)->post($id);
    }
}
