<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId;

final class RemoveConstraintJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/rule/{ruleId}/removeConstraint.json [operationId: removeSmartListRuleConstraintUsingPOST] */
    /**
     * Remove Rule Constraint
     *
     * Removes a constraint from a rule without deleting the entire rule. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\RemoveConstraintJson $identifier, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\RemoveConstraintJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\RemoveConstraintJson::class)->post($identifier, $payload);
    }
}
