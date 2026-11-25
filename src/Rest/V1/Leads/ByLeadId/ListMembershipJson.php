<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\ByLeadId;

final class ListMembershipJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/{leadId}/listMembership.json [operationId: getListMembershipUsingGET] */
    /**
     * Get Lists by Lead Id
     *
     * Query static list membership for one lead. Required Permissions: Read-Only Asset
     */
    public static function get(int $leadId, ?\MarketoSDK\GetParams\Rest\V1\Leads\ByLeadId\ListMembershipJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lists
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\ByLeadId\ListMembershipJson::class)->get($leadId, $params);
    }
}
