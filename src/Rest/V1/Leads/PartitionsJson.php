<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads;

final class PartitionsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/partitions.json [operationId: getLeadPartitionsUsingGET] */
    /**
     * Get Lead Partitions
     *
     * Returns a list of available partitions in the target instance. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\LeadPartition
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\PartitionsJson::class)->get();
    }

    /** POST /rest/v1/leads/partitions.json [operationId: updatePartitionsUsingPOST] */
    /**
     * Update Lead Partition
     *
     * Updates the lead partition for a list of leads. Required Permissions: Read-Write Lead
     */
    public static function post(\MarketoSDK\DTOs\Update\LeadPartition\Request $payload): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\PartitionsJson::class)->post($payload);
    }

}
