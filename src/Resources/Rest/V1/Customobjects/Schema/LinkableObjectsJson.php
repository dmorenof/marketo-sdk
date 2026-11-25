<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Customobjects\Schema;

final class LinkableObjectsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/customobjects/schema/linkableObjects.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ObjectLinkableObject',
    ];

    /**
     * Get Custom Object Linkable Objects
     *
     * Returns a list of linkable custom objects and their fields. Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ObjectLinkableObject
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ObjectLinkableObject $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
