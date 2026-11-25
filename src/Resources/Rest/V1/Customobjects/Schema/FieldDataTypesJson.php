<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema;

final class FieldDataTypesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/customobjects/schema/fieldDataTypes.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObjectTypeFieldDataTypes',
    ];

    /**
     * Get Custom Object Type Field Data Types
     *
     * Returns a list of permissible data types that are assigned to custom object fields. Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\CustomObjectTypeFieldDataTypes
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObjectTypeFieldDataTypes $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
