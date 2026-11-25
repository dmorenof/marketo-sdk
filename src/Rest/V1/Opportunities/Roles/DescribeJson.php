<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Opportunities\Roles;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/opportunities/roles/describe.json [operationId: describeOpportunityRoleUsingGET] */
    /**
     * Describe Opportunity Role
     *
     * Returns object and field metadata for Opportunity Roles in the target instance. Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\Roles\DescribeJson::class)->get();
    }

}
