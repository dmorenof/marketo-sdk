<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById;

final class ReorderJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartList/{id}/reorder.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Reorder Rules
     *
     * Changes the order of rules within a smart list. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\ReorderJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
