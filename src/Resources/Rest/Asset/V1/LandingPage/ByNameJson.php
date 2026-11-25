<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPage/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPage\\Response',
    ];

    /**
     * Get Landing Page by Name
     *
     * Returns the landing page record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPage\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
