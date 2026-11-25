<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPage/{id}/delete.json [operationId: deleteLandingPageByIdUsingPOST] */
    /**
     * Delete Landing Page
     *
     * Deletes the target landing page. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\DeleteJson::class)->post($id);
    }

}
