<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\ByLeadId;

final class AssociateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/leads/{leadId}/associate.json [operationId: associateLeadUsingPOST] */
    /**
     * Associate Lead
     *
     * Associates a known Marketo lead record to a munchkin cookie and its associated web activity history. Required Permissions: Read-Write Lead
     */
    public static function post(int $leadId, \MarketoSDK\PostParams\Rest\V1\Leads\ByLeadId\AssociateJson $params): \MarketoSDK\DTOs\ResponseWithoutResult
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\ByLeadId\AssociateJson::class)->post($leadId, $params);
    }

}
