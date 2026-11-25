<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName;

final class DependentAssetsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/customobjects/schema/{apiName}/dependentAssets.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectDependentAssets',
    ];

    /**
     * Get Custom Object Dependent Assets
     *
     * Returns a list of dependent assets for a custom object type, including their in-instance location. Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public function get(string $apiName): \MarketoSDK\DTOs\ResponseOf\ObjectDependentAssets
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectDependentAssets $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['apiName' => $apiName]);
        return $result;
    }
}
