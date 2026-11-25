<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form;

final class FieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/form/fields.json [operationId: getAllFieldsUsingGET] */
    /**
     * Get Available Form Fields
     *
     * Retrieves a list of all valid fields for use in forms. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\Form\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\FieldsMetaData\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\FieldsJson::class)->get($params);
    }

}
