<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPageTemplate\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPageTemplate/{id}/delete.json [operationId: deleteLpTemplateUsingPOST] */
    /**
     * Delete Landing Page Template
     *
     * Deletes the target landing page template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById\DeleteJson::class)->post($id);
    }

}
