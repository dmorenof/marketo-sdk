<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads;

final class PartitionsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads/partitions.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadPartition',
    ];

    /**
     * Get Lead Partitions
     *
     * Returns a list of available partitions in the target instance. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\LeadPartition
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadPartition $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads/partitions.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Lead',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\LeadPartition\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Lead Partition
     *
     * Updates the lead partition for a list of leads. Required Permissions: Read-Write Lead
     */
    public function post(\MarketoSDK\DTOs\Update\LeadPartition\Request $payload): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Lead $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
