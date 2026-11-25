<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById;

final class AutoSuggestJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartList/{id}/autoSuggest.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\AutoSuggestValue',
    ];

    /**
     * Get Auto Suggest for Smart List
     *
     * Returns suggested values for configuring a smart list rule. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, \MarketoSDK\GetParams\Rest\Asset\V1\SmartList\ById\AutoSuggestJson $params): \MarketoSDK\DTOs\ResponseOf\AutoSuggestValue
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\AutoSuggestValue $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
