<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class CloneJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/clone.json [operationId: cloneLpFormsUsingPOST] */
    /**
     * Clone Form
     *
     * Clones the target form. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, ?\MarketoSDK\DTOs\CloneFormRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\CloneJson::class)->post($id);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\CloneJson::class)->post($id, $payload);
    }

}
