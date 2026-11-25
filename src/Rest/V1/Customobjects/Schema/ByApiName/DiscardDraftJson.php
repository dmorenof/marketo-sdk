<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema\ByApiName;

final class DiscardDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/customobjects/schema/{apiName}/discardDraft.json [operationId: discardCustomObjectTypeUsingPOST] */
    /**
     * Discard Custom Object Type Draft
     *
     * Discards the current draft of the custom object type. Required Permissions: Read-Write Custom Object Type
     */
    public static function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\DiscardDraftJson::class)->post($apiName);
    }

}
