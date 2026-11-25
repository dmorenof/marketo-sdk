<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Companies;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/companies/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Company',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\Company\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete Companies
     *
     * Deletes the included list of company records from the destination instance. Required Permissions: Read-Write Company
     */
    public function post(\MarketoSDK\DTOs\Delete\Company\Request $payload): \MarketoSDK\DTOs\ResponseOf\Company
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Company $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
