<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById\Variable;

final class NameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/variable/{name}.json [operationId: updateVariableUsingPOST] */
    /**
     * Update Email Variable
     *
     * Updates the value of a given variable in an email. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Variable\NameJson $identifier, ?\MarketoSDK\DTOs\Update\Variable\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\EmailVariable\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Variable\NameJson::class)->post($identifier);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Variable\NameJson::class)->post($identifier, $payload);
    }
}
