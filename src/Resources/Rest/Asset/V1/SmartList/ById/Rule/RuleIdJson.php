<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\Rule;

final class RuleIdJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartList/{id}/rule/{ruleId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Update Rule
     *
     * Updates an existing smart list rule. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartList\ById\Rule\RuleIdJson $identifier, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\Rule\RuleIdJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, body: $payload);
        return $result;
    }

}
