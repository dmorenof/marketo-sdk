<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class TagTypesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/tagTypes.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\TagResponseGetAll',
    ];

    /**
     * Get Tag Types
     *
     * Retrieves a list of available tag types. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\TagTypesJson $params = null): \MarketoSDK\DTOs\ResponseOf\TagResponseGetAll
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\TagResponseGetAll $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
