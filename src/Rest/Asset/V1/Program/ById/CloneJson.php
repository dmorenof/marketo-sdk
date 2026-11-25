<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Program\ById;

final class CloneJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/program/{id}/clone.json [operationId: cloneProgramUsingPOST] */
    /**
     * Clone Program
     *
     * Clones the target program. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\CloneProgramRequest $payload): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\ById\CloneJson::class)->post($id, $payload);
    }

}
