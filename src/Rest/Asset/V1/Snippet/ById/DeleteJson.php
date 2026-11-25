<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/snippet/{id}/delete.json [operationId: deleteSnippetUsingPOST] */
    /**
     * Delete Snippet
     *
     * Deletes the target snippet. The snippet may not be in use by emails or landing pages. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\DeleteJson::class)->post($id);
    }

}
