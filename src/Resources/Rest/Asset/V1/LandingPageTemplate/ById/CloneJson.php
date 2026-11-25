<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPageTemplate/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpTemplate\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneLpTemplateRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Clone Landing Page Template
     *
     * Clones the target landing page template. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\CloneLpTemplateRequest $payload): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
