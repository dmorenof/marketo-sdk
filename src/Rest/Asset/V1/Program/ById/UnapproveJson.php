<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Program\ById;

final class UnapproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/program/{id}/unapprove.json [operationId: unapproveProgramUsingPOST] */
    /**
     * Unapprove Program
     *
     * Unapproves the target program. Only valid for approved email programs. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\ById\UnapproveJson::class)->post($id);
    }

}
