<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId;

final class RemoveConstraintJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartList/{id}/rule/{ruleId}/removeConstraint.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Remove Rule Constraint
     *
     * Removes a constraint from a rule without deleting the entire rule. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\RemoveConstraintJson $identifier, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\RemoveConstraintJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, body: $payload);
        return $result;
    }

}
