<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\Rules;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartList/{id}/rules/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
    ];

    /**
     * Delete All Rules
     *
     * Removes all rules from a smart list. Required Permissions: Read-Write Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
