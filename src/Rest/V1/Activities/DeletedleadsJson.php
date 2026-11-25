<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities;

final class DeletedleadsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/activities/deletedleads.json [operationId: getDeletedLeadsUsingGET] */
    /**
     * Get Deleted Leads
     *
     * Returns a list of leads deleted after a given datetime. Deletions greater than 14 days old may be pruned. Required Permissions: Read-Only Activity, Read-Write Activity
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\Activities\DeletedleadsJson $params): \MarketoSDK\DTOs\ResponseOf\Activity
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\DeletedleadsJson::class)->get($params);
    }

}
