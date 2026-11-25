<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet\ById;

final class ApproveDraftJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/snippet/{id}/approveDraft.json [operationId: approveSnippetUsingPOST] */
    /**
     * Approve Snippet Draft
     *
     * Approves the current draft of the snippet. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\ApproveDraftJson::class)->post($id);
    }

}
