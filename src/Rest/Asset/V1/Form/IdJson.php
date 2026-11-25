<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/form/{id}.json [operationId: getLpFormByIdUsingGET] */
    /**
     * Get Form By Id
     *
     * Retrieves a form record by its id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Form\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\IdJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/form/{id}.json [operationId: updateFormsUsingPOST] */
    /**
     * Update Form Metadata
     *
     * Updates the metadata of the target form. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\FormMetaData\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\IdJson::class)->post($id, $payload);
    }
}
