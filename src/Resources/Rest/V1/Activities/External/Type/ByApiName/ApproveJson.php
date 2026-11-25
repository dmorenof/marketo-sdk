<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName;

final class ApproveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/activities/external/type/{apiName}/approve.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivityType',
    ];

    /**
     * Approve Custom Activity Type
     *
     * Approves the current draft of the type, and makes it the live version. This will delete the current live version of the type. Required Permissions: Read-Write Activity Metadata
     */
    public function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivityType $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['apiName' => $apiName]);
        return $result;
    }

}
