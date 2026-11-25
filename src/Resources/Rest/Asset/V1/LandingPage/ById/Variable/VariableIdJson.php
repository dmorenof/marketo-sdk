<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\Variable;

final class VariableIdJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPage/{id}/variable/{variableId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageVariable\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Update Landing Page Variable
     *
     * Updates the value of the given variable. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\Variable\VariableIdJson $identifier, \MarketoSDK\PostParams\Rest\Asset\V1\LandingPage\ById\Variable\VariableIdJson $params): \MarketoSDK\DTOs\ResponseOf\LandingPageVariable\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageVariable\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }

}
