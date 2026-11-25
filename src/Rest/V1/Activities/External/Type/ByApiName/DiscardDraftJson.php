<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External\Type\ByApiName;

final class DiscardDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/activities/external/type/{apiName}/discardDraft.json [operationId: discardDraftofCustomActivityTypeUsingPOST] */
    /**
     * Discard Custom Activity Type Draft
     *
     * Discards the current draft of the custom activity type. Required Permissions: Read-Write Activity Metadata
     */
    public static function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName\DiscardDraftJson::class)->post($apiName);
    }
}
