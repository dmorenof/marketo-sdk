<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList;

final class RulesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartList/rules.json [operationId: getSmartListRulesUsingGET] */
    /**
     * Get Smart List Rules
     *
     * Returns all available filter rule types that can be used in smart lists. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\SmartListRuleType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\RulesJson::class)->get();
    }
}
