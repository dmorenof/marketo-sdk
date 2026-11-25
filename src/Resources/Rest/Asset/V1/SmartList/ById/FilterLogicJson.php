<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById;

final class FilterLogicJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartList/{id}/filterLogic.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Update Filter Logic
     *
     * Updates the filter match type for a smart list. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\FilterLogicJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }

}
