<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById\Rules;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/rules/delete.json [operationId: deleteAllSmartListRulesUsingPOST] */
    /**
     * Delete All Rules
     *
     * Removes all rules from a smart list. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\Rules\DeleteJson::class)->post($id);
    }

}
