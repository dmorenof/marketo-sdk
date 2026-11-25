<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPageTemplate\ById;

final class ApproveDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPageTemplate/{id}/approveDraft.json [operationId: approveLandingPageTemplateUsingPOST] */
    /**
     * Approve Landing Page Template Draft
     *
     * Approves the current landing page template draft. This will delete the current approved version of the template if there is one. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById\ApproveDraftJson::class)->post($id);
    }
}
