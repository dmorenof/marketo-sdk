<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPageTemplate\ById;

final class DiscardDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPageTemplate/{id}/discardDraft.json [operationId: discardDraftUsingPOST_2] */
    /**
     * Discard Landing Page Template Draft
     *
     * Discrads the current draft of the landing page template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById\DiscardDraftJson::class)->post($id);
    }

}
