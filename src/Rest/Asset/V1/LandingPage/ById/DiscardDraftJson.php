<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById;

final class DiscardDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPage/{id}/discardDraft.json [operationId: discardLandingPageByIdUsingPOST] */
    /**
     * Discard Landing Page Draft
     *
     * Discards the current draft of the landing page. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\DiscardDraftJson::class)->post($id);
    }

}
