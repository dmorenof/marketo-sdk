<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPageTemplate/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpTemplate\\Response',
    ];

    /**
     * Get Landing Page Template by Name
     *
     * Retrieves the landing page template record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageTemplate\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
