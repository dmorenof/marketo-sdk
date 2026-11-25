<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema;

final class LinkableObjectsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/customobjects/schema/linkableObjects.json [operationId: getCustomObjectTypeLinkableObjectsUsingGET] */
    /**
     * Get Custom Object Linkable Objects
     *
     * Returns a list of linkable custom objects and their fields. Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ObjectLinkableObject
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\LinkableObjectsJson::class)->get();
    }
}
