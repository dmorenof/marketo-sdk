<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById;

final class SendSampleJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/sendSample.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SendSample\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\SendSampleEmailRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send Sample Email
     *
     * Sends a sample email to the given email address. Leads may be impersonated to populate data for tokens and dynamic content. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\SendSampleEmailRequest $payload): \MarketoSDK\DTOs\ResponseOf\SendSample\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SendSample\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
