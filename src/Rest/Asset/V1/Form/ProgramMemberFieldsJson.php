<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form;

final class ProgramMemberFieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/form/programMemberFields.json [operationId: getAllProgramMemberFieldsUsingGET] */
    /**
     * Get Available Form Program Member Fields
     *
     * Retrieves a list of all valid Program Member fields for use in forms. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\Form\ProgramMemberFieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\FieldsMetaData\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ProgramMemberFieldsJson::class)->get($params);
    }
}
