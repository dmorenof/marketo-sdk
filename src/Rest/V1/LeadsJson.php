<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class LeadsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads.json [operationId: getLeadsByFilterUsingGET] */
    /**
     * Get Leads by Filter Type
     *
     * Returns a list of up to 300 leads based on a list of values in a particular field. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\LeadsJson $params): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\LeadsJson::class)->get($params);
    }

    /** POST /rest/v1/leads.json [operationId: syncLeadUsingPOST] */
    /**
     * Sync Leads
     *
     * Syncs a list of leads to the target instance. Required Permissions: Read-Write Lead
     */
    public static function post(\MarketoSDK\DTOs\Sync\Lead\Request $payload): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\LeadsJson::class)->post($payload);
    }

}
