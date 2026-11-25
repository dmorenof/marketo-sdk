<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet\ById;

final class DiscardDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/snippet/{id}/discardDraft.json [operationId: discardSnippetUsingPOST] */
    /**
     * Discard Snippet Draft
     *
     * Discards the current draft of the snippet. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\DiscardDraftJson::class)->post($id);
    }

}
