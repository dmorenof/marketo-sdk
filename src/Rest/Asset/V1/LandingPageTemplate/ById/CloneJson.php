<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPageTemplate\ById;

final class CloneJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPageTemplate/{id}/clone.json [operationId: cloneLpTemplateUsingPOST] */
    /**
     * Clone Landing Page Template
     *
     * Clones the target landing page template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\CloneLpTemplateRequest $payload): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById\CloneJson::class)->post($id, $payload);
    }

}
