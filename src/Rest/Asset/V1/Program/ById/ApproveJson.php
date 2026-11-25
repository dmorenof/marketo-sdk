<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Program\ById;

final class ApproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/program/{id}/approve.json [operationId: approveProgramUsingPOST] */
    /**
     * Approve Program
     *
     * Approves the target program. Only valid for unapproved email programs. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\ById\ApproveJson::class)->post($id);
    }

}
