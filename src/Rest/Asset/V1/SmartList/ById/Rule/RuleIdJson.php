<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById\Rule;

final class RuleIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/rule/{ruleId}.json [operationId: updateSmartListRuleUsingPOST] */
    /**
     * Update Rule
     *
     * Updates an existing smart list rule. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartList\ById\Rule\RuleIdJson $identifier, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\Rule\RuleIdJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\Rule\RuleIdJson::class)->post($identifier, $payload);
    }
}
