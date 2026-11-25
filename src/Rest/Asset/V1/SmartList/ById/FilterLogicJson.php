<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById;

final class FilterLogicJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/filterLogic.json [operationId: updateSmartListFilterLogicUsingPOST] */
    /**
     * Update Filter Logic
     *
     * Updates the filter match type for a smart list. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\FilterLogicJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\FilterLogicJson::class)->post($id, $payload);
    }
}
