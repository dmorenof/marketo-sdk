<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities;

final class ExternalJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/activities/external.json [operationId: addCustomActivityUsingPOST] */
    /**
     * Add Custom Activities
     *
     * Allows insertion of custom activities associated to given lead records. Requires provisioning of custom activity types to utilize. Required Permissions: Read-Write Activity
     */
    public static function post(\MarketoSDK\DTOs\CustomActivity\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivity
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\ExternalJson::class)->post($payload);
    }
}
