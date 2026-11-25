<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class FieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/form/{id}/fields.json [operationId: getFormFieldByFormVidUsingGET] */
    /**
     * Get Fields for Form
     *
     * Retrieves the list of fields in the target form. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Form\ById\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\FieldsJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/form/{id}/fields.json [operationId: addFieldToAFormUsingPOST] */
    /**
     * Add Field to Form
     *
     * Adds a field to a form. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Add\FormField\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\FieldsJson::class)->post($id, $payload);
    }

}
