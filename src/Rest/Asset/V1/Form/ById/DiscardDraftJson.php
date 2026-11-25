<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class DiscardDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/discardDraft.json [operationId: discardFormByIdUsingPOST] */
    /**
     * Discard Form Draft
     *
     * Discards the current draft of the form. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\DiscardDraftJson::class)->post($id);
    }

}
