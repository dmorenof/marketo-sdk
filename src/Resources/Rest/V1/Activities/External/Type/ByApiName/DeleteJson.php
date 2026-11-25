<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/activities/external/type/{apiName}/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivityType',
    ];

    /**
     * Delete Custom Activity Type
     *
     * Deletes the target custom activity type. The type must first be removed from use by any assets, such as triggers or filters. Required Permissions: Read-Write Activity Metadata
     */
    public function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivityType $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['apiName' => $apiName]);
        return $result;
    }

}
