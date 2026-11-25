<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet\ById;

final class CloneJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/snippet/{id}/clone.json [operationId: cloneSnippetUsingPOST] */
    /**
     * Clone Snippet
     *
     * Clones the target snippet. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, ?\MarketoSDK\DTOs\CloneSnippetRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\CloneJson::class)->post($id);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\CloneJson::class)->post($id, $payload);
    }

}
