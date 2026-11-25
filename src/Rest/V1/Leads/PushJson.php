<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads;

final class PushJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/leads/push.json [operationId: pushToMarketoUsingPOST] */
    /**
     * Push Lead to Marketo
     *
     * Upserts a lead and generates a Push Lead to Marketo activity. Required Permissions: Read-Write Lead
     */
    public static function post(\MarketoSDK\DTOs\PushLeadToMarketoRequest $payload): \MarketoSDK\DTOs\ResponseOf\PushLeadToMarketo
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\PushJson::class)->post($payload);
    }
}
