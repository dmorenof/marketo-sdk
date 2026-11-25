<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads;

final class SubmitFormJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads/submitForm.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SubmitForm',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\SubmitFormRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Submit Form
     *
     * Upserts a lead and generates a "Fill out Form" activity which is associated back to program and/or campaign. Required Permissions: Read-Write Lead
     */
    public function post(\MarketoSDK\DTOs\SubmitFormRequest $payload): \MarketoSDK\DTOs\ResponseOf\SubmitForm
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SubmitForm $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
