<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/emailTemplate/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailTemplate\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneEmailTemplateRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Clone Email Template
     *
     * Clones the designated email template. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\CloneEmailTemplateRequest $payload): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
