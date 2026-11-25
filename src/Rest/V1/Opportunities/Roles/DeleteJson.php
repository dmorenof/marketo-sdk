<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Opportunities\Roles;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/opportunities/roles/delete.json [operationId: deleteOpportunityRolesUsingPOST] */
    /**
     * Delete Opportunity Roles
     *
     * Deletes a list of opportunities from the target instance. Required Permissions: Read-Write Named Opportunity
     */
    public static function post(?\MarketoSDK\DTOs\Delete\CustomObject\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\Roles\DeleteJson::class)->post();
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\Roles\DeleteJson::class)->post($payload);
    }
}
