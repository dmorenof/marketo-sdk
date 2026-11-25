<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById;

final class RulesJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartList/{id}/rules.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Add Rule
     *
     * Adds a rule to a smart list. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\RulesJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
