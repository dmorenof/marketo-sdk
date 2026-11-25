<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\Programs;

final class ProgramIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/programs/{programId}.json [operationId: getLeadsByProgramIdUsingGET] */
    /**
     * Get Leads by Program Id
     *
     * Retrieves a list of leads which are members of the designated program. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(int $programId, ?\MarketoSDK\GetParams\Rest\V1\Leads\Programs\ProgramIdJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\Programs\ProgramIdJson::class)->get($programId, $params);
    }

}
