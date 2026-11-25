<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Companies\Schema\Fields;

final class FieldApiNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/companies/schema/fields/{fieldApiName}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadField',
    ];

    /**
     * Get Company Field by Name
     *
     * Retrieves metadata for single company field. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public function get(string $fieldApiName): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadField $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['fieldApiName' => $fieldApiName]);
        return $result;
    }

}
