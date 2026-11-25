<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads\ByLeadId;

final class AssociateJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads/{leadId}/associate.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseWithoutResult',
    ];

    /**
     * Associate Lead
     *
     * Associates a known Marketo lead record to a munchkin cookie and its associated web activity history. Required Permissions: Read-Write Lead
     */
    public function post(int $leadId, \MarketoSDK\PostParams\Rest\V1\Leads\ByLeadId\AssociateJson $params): \MarketoSDK\DTOs\ResponseWithoutResult
    {
        /** @var \MarketoSDK\DTOs\ResponseWithoutResult $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['leadId' => $leadId], parameters: $params);
        return $result;
    }
}
