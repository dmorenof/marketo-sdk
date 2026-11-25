<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById;

final class ReorderJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/reorder.json [operationId: reorderSmartListRulesUsingPOST] */
    /**
     * Reorder Rules
     *
     * Changes the order of rules within a smart list. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\ReorderJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\ReorderJson::class)->post($id, $payload);
    }
}
