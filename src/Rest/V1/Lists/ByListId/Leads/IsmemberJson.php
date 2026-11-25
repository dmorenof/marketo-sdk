<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Lists\ByListId\Leads;

final class IsmemberJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/lists/{listId}/leads/ismember.json [operationId: areLeadsMemberOfListUsingGET] */
    /**
     * Member of List
     *
     * Checks if leads are members of a given static list. Required Permissions: Read-Write Lead
     */
    public static function get(int $listId, ?\MarketoSDK\GetParams\Rest\V1\Lists\ByListId\Leads\IsmemberJson $params = null): \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Lists\ByListId\Leads\IsmemberJson::class)->get($listId, $params);
    }

}
