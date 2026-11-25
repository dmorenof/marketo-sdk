<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\ByLeadId;

final class MergeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/leads/{leadId}/merge.json [operationId: mergeLeadsUsingPOST] */
    /**
     * Merge Leads
     *
     * Merges two or more known lead records into a single lead record. Required Permissions: Read-Write Lead
     */
    public static function post(int $leadId, ?\MarketoSDK\PostParams\Rest\V1\Leads\ByLeadId\MergeJson $params = null): \MarketoSDK\DTOs\ResponseWithoutResult
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\ByLeadId\MergeJson::class)->post($leadId, $params);
    }

}
