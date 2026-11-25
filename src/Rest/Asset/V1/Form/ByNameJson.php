<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/form/byName.json [operationId: getLpFormByNameUsingGET] */
    /**
     * Get Form by Name
     *
     * Retrieves a form record by its name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\Form\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ByNameJson::class)->get($params);
    }

}
