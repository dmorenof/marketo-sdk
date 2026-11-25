<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById;

final class VariablesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/email/{id}/variables.json [operationId: getEmailVariablesUsingGET] */
    /**
     * Get Email Variables
     *
     * Returns a list of the available variables in an email. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id): \MarketoSDK\DTOs\ResponseOf\EmailVariable\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\VariablesJson::class)->get($id);
    }

}
