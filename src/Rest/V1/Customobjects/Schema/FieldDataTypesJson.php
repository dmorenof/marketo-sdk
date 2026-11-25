<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema;

final class FieldDataTypesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/customobjects/schema/fieldDataTypes.json [operationId: getCustomObjectTypeFieldDataTypesUsingGET] */
    /**
     * Get Custom Object Type Field Data Types
     *
     * Returns a list of permissible data types that are assigned to custom object fields. Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\CustomObjectTypeFieldDataTypes
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\FieldDataTypesJson::class)->get();
    }

}
