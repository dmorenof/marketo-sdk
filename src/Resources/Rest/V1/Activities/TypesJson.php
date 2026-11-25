<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities;

final class TypesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/activities/types.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ActivityType',
    ];

    /**
     * Get Activity Types
     *
     * Returns a list of available activity types in the target instance, along with associated metadata of each type. Required Permissions: Read-Only Activity, Read-Write Activity
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ActivityType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ActivityType $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
