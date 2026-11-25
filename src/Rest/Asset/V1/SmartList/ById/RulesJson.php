<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById;

final class RulesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/rules.json [operationId: addSmartListRuleUsingPOST] */
    /**
     * Add Rule
     *
     * Adds a rule to a smart list. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\RulesJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\RulesJson::class)->post($id, $payload);
    }

}
