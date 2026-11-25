<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/leads/delete.json [operationId: deleteLeadsUsingPOST] */
    /**
     * Delete Leads
     *
     * Delete a list of leads from the destination instance. Required Permissions: Read-Write Lead
     */
    public static function post(?\MarketoSDK\PostParams\Rest\V1\Leads\DeleteJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\DeleteJson::class)->post($params);
    }

}
