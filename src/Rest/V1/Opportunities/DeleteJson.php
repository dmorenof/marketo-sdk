<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Opportunities;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/opportunities/delete.json [operationId: deleteOpportunitiesUsingPOST] */
    /**
     * Delete Opportunities
     *
     * Deletes a list of opportunity records from the target instance. Input records should only have one member, based on the value of 'dedupeBy'. Required Permissions: Read-Write Named Opportunity
     */
    public static function post(?\MarketoSDK\DTOs\Delete\CustomObject\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\DeleteJson::class)->post();
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\DeleteJson::class)->post($payload);
    }
}
