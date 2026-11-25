<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class FormsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/forms.json [operationId: browseForms2UsingGET] */
    /**
     * Get Forms
     *
     * Retrieves a list of accessible form records from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\FormsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\FormsJson::class)->get($params);
    }

    /** POST /rest/asset/v1/forms.json [operationId: createLpFormsUsingPOST] */
    /**
     * Create Form
     *
     * Creates a new form. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\LpForm\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\FormsJson::class)->post($payload);
    }
}
