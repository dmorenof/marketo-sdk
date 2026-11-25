<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPageTemplate\ById;

final class UnapproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPageTemplate/{id}/unapprove.json [operationId: unapproveLandingPageTemplateUsingPOST] */
    /**
     * Unapprove Landing Page Template
     *
     * Unapproves the landing page template and reverts it to a draft-only state. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById\UnapproveJson::class)->post($id);
    }
}
