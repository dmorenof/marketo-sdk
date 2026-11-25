<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet\ById;

final class UnapproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/snippet/{id}/unapprove.json [operationId: unapproveSnippetUsingPOST] */
    /**
     * Unapprove Snippet
     *
     * Unapproves the current version of the snippet. The snippet may not be in use. The snippet will be reverted to a draft-only state. Required Permissions: Approve Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\UnapproveJson::class)->post($id);
    }

}
