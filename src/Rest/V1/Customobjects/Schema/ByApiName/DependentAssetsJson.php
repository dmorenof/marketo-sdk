<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema\ByApiName;

final class DependentAssetsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/customobjects/schema/{apiName}/dependentAssets.json [operationId: getCustomObjectTypeDependentAssetsUsingGET] */
    /**
     * Get Custom Object Dependent Assets
     *
     * Returns a list of dependent assets for a custom object type, including their in-instance location. Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public static function get(string $apiName): \MarketoSDK\DTOs\ResponseOf\ObjectDependentAssets
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\DependentAssetsJson::class)->get($apiName);
    }
}
