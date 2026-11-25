<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities;

final class PagingtokenJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/activities/pagingtoken.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOfVoid',
    ];

    /**
     * Get Paging Token
     *
     * Returns a paging token for use in retrieving activities and data value changes. Required Permissions: Read-Only Activity, Read-Write Activity
     */
    public function get(\MarketoSDK\GetParams\Rest\V1\Activities\PagingtokenJson $params): \MarketoSDK\DTOs\ResponseOfVoid
    {
        /** @var \MarketoSDK\DTOs\ResponseOfVoid $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
