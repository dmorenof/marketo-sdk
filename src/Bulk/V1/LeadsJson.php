<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1;

final class LeadsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/leads.json [operationId: importLeadUsingPOST] */
    /**
     * Import Leads
     *
     * Imports a file containing data records into the target instance. Required Permissions: Read-Write Lead
     */
    public static function post(\MarketoSDK\PostParams\Bulk\V1\LeadsJson $params): \MarketoSDK\DTOs\ResponseOf\ImportLead\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\LeadsJson::class)->post($params);
    }
}
