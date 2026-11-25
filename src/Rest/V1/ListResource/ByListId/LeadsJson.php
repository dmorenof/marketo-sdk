<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\ListResource\ByListId;

final class LeadsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/list/{listId}/leads.json [operationId: getLeadsByListIdUsingGET] */
    /**
     * Get Leads By List Id
     *
     * Retrieves person records which are members of the given static list. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(int $listId, ?\MarketoSDK\GetParams\Rest\V1\ListResource\ByListId\LeadsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadByListId
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\ListResource\ByListId\LeadsJson::class)->get($listId, $params);
    }
}
