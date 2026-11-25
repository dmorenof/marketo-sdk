<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Namedaccounts\Schema;

final class FieldsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/namedaccounts/schema/fields.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadField',
    ];

    /**
     * Get Named Account Fields
     *
     * Retrieves metadata for all named account fields in the target instance. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public function get(?\MarketoSDK\GetParams\Rest\V1\Namedaccounts\Schema\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadField $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
