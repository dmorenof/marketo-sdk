<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById;

final class FullContentJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPage/{id}/fullContent.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\GetLandingPageFullContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Landing Page Full Content
     *
     * Returns the serialized HTML version of the landing page. Required Permissions: Read-Only Assets, Read-Write Assets. If leadId is passed in the request: Read-Only Lead, Read-Write Lead.
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ById\FullContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\GetLandingPageFullContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\GetLandingPageFullContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
