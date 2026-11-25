<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities\External;

final class TypesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/activities/external/types.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivityType',
    ];

    /**
     * Get Custom Activity Types
     *
     * Returns metadata regarding custom activities provisioned in the target instance. Required Permissions: Read-Only Activity Metadata, Read-Write Activity Metadata
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivityType $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
