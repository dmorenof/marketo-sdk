<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form;

final class ProgramMemberFieldsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/form/programMemberFields.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\FieldsMetaData\\Response',
    ];

    /**
     * Get Available Form Program Member Fields
     *
     * Retrieves a list of all valid Program Member fields for use in forms. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\Form\ProgramMemberFieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\FieldsMetaData\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\FieldsMetaData\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
