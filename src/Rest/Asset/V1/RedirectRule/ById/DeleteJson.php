<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\RedirectRule\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/redirectRule/{id}/delete.json [operationId: deleteLandingPageRedirectRuleUsingPOST] */
    /**
     * Delete Landing Page Redirect Rule
     *
     * Delete a landing page redirect rule. Required Permissions: Read Write Redirect Rules
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\RedirectRule\ById\DeleteJson::class)->post($id);
    }
}
