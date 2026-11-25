<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Programs\Members\Schema;

final class FieldsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/programs/members/schema/fields.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadField',
    ];

    /**
     * Get Program Member Fields
     *
     * Retrieves metadata for all program member fields in the target instance. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public function get(?\MarketoSDK\GetParams\Rest\V1\Programs\Members\Schema\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadField $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/programs/members/schema/fields.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CreateLeadField',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\LeadField\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Program Member Fields
     *
     * Create program member fields in the target instance. Required Permissions: Read-Write Schema Custom Field
     */
    public function post(\MarketoSDK\DTOs\Create\LeadField\Request $payload): \MarketoSDK\DTOs\ResponseOf\CreateLeadField
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CreateLeadField $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
