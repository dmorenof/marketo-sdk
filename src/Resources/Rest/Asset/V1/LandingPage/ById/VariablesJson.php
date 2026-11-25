<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById;

final class VariablesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPage/{id}/variables.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageVariable\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Landing Page Variables
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ById\VariablesJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPageVariable\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageVariable\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
