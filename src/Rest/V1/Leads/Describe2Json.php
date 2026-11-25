<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads;

final class Describe2Json extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/describe2.json [operationId: describeUsingGET_6] */
    /**
     * Describe Lead2
     *
     * Returns list of searchable fields on lead objects in the target instance. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\LeadAttribute2
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\Describe2Json::class)->get();
    }

}
