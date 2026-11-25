<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById;

final class UnapproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPage/{id}/unapprove.json [operationId: unapproveLandingPageByIdUsingPOST] */
    /**
     * Unapprove Landing Page
     *
     * Unapproves the landing page, reverting it to a draft-only state. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\UnapproveJson::class)->post($id);
    }
}
