<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads;

final class Describe2Json extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads/describe2.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadAttribute2',
    ];

    /**
     * Describe Lead2
     *
     * Returns list of searchable fields on lead objects in the target instance. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\LeadAttribute2
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadAttribute2 $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
