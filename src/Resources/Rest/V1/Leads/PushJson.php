<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads;

final class PushJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads/push.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\PushLeadToMarketo',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\PushLeadToMarketoRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Push Lead to Marketo
     *
     * Upserts a lead and generates a Push Lead to Marketo activity. Required Permissions: Read-Write Lead
     */
    public function post(\MarketoSDK\DTOs\PushLeadToMarketoRequest $payload): \MarketoSDK\DTOs\ResponseOf\PushLeadToMarketo
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\PushLeadToMarketo $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
