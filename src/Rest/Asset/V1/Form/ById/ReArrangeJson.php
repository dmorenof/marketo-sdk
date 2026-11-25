<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class ReArrangeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/reArrange.json [operationId: updateFieldPositionsUsingPOST] */
    /**
     * Update Field Positions
     *
     * Reorders the list of fields in a form. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, ?\MarketoSDK\DTOs\ReArrangeRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\ReArrangeJson::class)->post($id);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\ReArrangeJson::class)->post($id, $payload);
    }

}
