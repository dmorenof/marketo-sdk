<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPage/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPage\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneLandingPageRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Clone Landing Page
     *
     * Clones the target landing page. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\CloneLandingPageRequest $payload): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPage\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
