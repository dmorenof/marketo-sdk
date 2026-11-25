<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/rule/{ruleId}/delete.json [operationId: deleteSmartListRuleUsingPOST] */
    /**
     * Delete Rule
     *
     * Deletes a single rule from a smart list. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\DeleteJson $identifier): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\DeleteJson::class)->post($identifier);
    }
}
