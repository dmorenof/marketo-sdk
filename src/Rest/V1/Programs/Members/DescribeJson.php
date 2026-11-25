<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Programs\Members;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/programs/members/describe.json [operationId: describeProgramMemberUsingGET2] */
    /**
     * Describe Program Member
     *
     * Returns metadata about program member objects in the target instance, including a list of all fields available for interaction via the APIs. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ProgramMemberAttributes2
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Programs\Members\DescribeJson::class)->get();
    }

}
