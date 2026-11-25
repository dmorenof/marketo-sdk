<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\ByLeadId;

final class ProgramMembershipJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/{leadId}/programMembership.json [operationId: getProgramMembershipUsingGET] */
    /**
     * Get Programs by Lead Id
     *
     * Query program membership for one lead. Required Permissions: Read-Only Asset
     */
    public static function get(int $leadId, ?\MarketoSDK\GetParams\Rest\V1\Leads\ByLeadId\ProgramMembershipJson $params = null): \MarketoSDK\DTOs\ResponseOf\Programs
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\ByLeadId\ProgramMembershipJson::class)->get($leadId, $params);
    }
}
