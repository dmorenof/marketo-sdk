<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById;

final class AutoSuggestJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartList/{id}/autoSuggest.json [operationId: getSmartListAutoSuggestUsingGET] */
    /**
     * Get Auto Suggest for Smart List
     *
     * Returns suggested values for configuring a smart list rule. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, \MarketoSDK\GetParams\Rest\Asset\V1\SmartList\ById\AutoSuggestJson $params): \MarketoSDK\DTOs\ResponseOf\AutoSuggestValue
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\AutoSuggestJson::class)->get($id, $params);
    }
}
