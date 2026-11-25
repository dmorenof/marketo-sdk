<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById;

final class CloneJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPage/{id}/clone.json [operationId: cloneLandingPageUsingPOST] */
    /**
     * Clone Landing Page
     *
     * Clones the target landing page. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\CloneLandingPageRequest $payload): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\CloneJson::class)->post($id, $payload);
    }
}
