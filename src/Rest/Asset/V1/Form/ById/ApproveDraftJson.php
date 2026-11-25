<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class ApproveDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/approveDraft.json [operationId: approveFromUsingPOST] */
    /**
     * Approve Form Draft
     *
     * Approves the current draft of the form. This will delete the current approved version of the form. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\ApproveDraftJson::class)->post($id);
    }

}
