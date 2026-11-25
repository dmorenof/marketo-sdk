<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById;

final class ApproveDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPage/{id}/approveDraft.json [operationId: approveLandingPageUsingPOST] */
    /**
     * Approve Landing Page Draft
     *
     * Approves the current draft of the landing page. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\ApproveDraftJson::class)->post($id);
    }

}
