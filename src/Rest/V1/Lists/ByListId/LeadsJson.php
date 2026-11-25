<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Lists\ByListId;

final class LeadsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** DELETE /rest/v1/lists/{listId}/leads.json [operationId: removeLeadsFromListUsingDELETE] */
    /**
     * Remove from List
     *
     * Removes a given set of person records from a target static list. Required Permissions: Read-Write Lead
     */
    public static function delete(int $listId, \MarketoSDK\DeleteParams\Rest\V1\Lists\ByListId\LeadsJson $params): \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Lists\ByListId\LeadsJson::class)->delete($listId, $params);
    }

    /** GET /rest/v1/lists/{listId}/leads.json [operationId: getLeadsByListIdUsingGET_1] */
    /**
     * Get Leads By List Id
     *
     * Retrieves person records which are members of the given static list. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(int $listId, ?\MarketoSDK\GetParams\Rest\V1\Lists\ByListId\LeadsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Lists\ByListId\LeadsJson::class)->get($listId, $params);
    }

    /** POST /rest/v1/lists/{listId}/leads.json [operationId: addLeadsToListUsingPOST] */
    /**
     * Add to List
     *
     * Adds a given set of person records to a target static list. There is a limit of 300 lead ids per request. Required Permissions: Read-Write Lead
     */
    public static function post(int $listId, ?\MarketoSDK\PostParams\Rest\V1\Lists\ByListId\LeadsJson $params = null): \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Lists\ByListId\LeadsJson::class)->post($listId, $params);
    }
}
