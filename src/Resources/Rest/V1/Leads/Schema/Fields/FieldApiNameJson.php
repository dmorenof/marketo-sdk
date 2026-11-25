<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads\Schema\Fields;

final class FieldApiNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads/schema/fields/{fieldApiName}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadField',
    ];

    /**
     * Get Lead Field by Name
     *
     * Retrieves metadata for single lead field. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public function get(string $fieldApiName): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadField $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['fieldApiName' => $fieldApiName]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads/schema/fields/{fieldApiName}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\UpdateLeadField',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\LeadField\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Lead Field
     *
     * Update metadata for a lead field in the target instance. See update rules <a href="https://developers.marketo.com/rest-api/lead-database/leads/#update_field">here</a>. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public function post(string $fieldApiName, \MarketoSDK\DTOs\Update\LeadField\Request $payload): \MarketoSDK\DTOs\ResponseOf\UpdateLeadField
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\UpdateLeadField $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['fieldApiName' => $fieldApiName]);
        return $result;
    }

}
