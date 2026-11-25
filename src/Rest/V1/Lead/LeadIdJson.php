<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Lead;

final class LeadIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/lead/{leadId}.json [operationId: getLeadByIdUsingGET] */
    /**
     * Get Lead by Id
     *
     * Retrieves a single lead record through its Marketo id. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(int $leadId, ?\MarketoSDK\GetParams\Rest\V1\Lead\LeadIdJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Lead\LeadIdJson::class)->get($leadId, $params);
    }
}
