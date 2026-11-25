<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById;

final class DiscardDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/discardDraft.json [operationId: discardDraftUsingPOST] */
    /**
     * Discard Email Draft
     *
     * Discards the current draft of an email. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\DiscardDraftJson::class)->post($id);
    }

}
