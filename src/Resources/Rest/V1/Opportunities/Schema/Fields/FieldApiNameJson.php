<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Opportunities\Schema\Fields;

final class FieldApiNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/opportunities/schema/fields/{fieldApiName}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadField',
    ];

    /**
     * Get Opportunity Field by Name
     *
     * Retrieves metadata for single opportunity field. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public function get(string $fieldApiName): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadField $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['fieldApiName' => $fieldApiName]);
        return $result;
    }

}
