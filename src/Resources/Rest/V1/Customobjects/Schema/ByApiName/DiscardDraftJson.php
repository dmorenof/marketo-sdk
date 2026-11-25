<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName;

final class DiscardDraftJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/customobjects/schema/{apiName}/discardDraft.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObjectType',
    ];

    /**
     * Discard Custom Object Type Draft
     *
     * Discards the current draft of the custom object type. Required Permissions: Read-Write Custom Object Type
     */
    public function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObjectType $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['apiName' => $apiName]);
        return $result;
    }
}
