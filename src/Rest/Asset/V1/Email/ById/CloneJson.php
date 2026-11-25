<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById;

final class CloneJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/clone.json [operationId: cloneEmailUsingPOST] */
    /**
     * Clone Email
     *
     * Clones the target email. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\CloneEmailRequest $payload): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\CloneJson::class)->post($id, $payload);
    }
}
