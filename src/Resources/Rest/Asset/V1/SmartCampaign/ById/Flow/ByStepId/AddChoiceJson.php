<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId;

final class AddChoiceJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/addChoice.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaignResponseWithFlow',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
            'stepId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Add Step Choice
     *
     * Adds a choice to an existing flow step. Use the Update Flow Step Choice endpoint to configure the choice condition and values. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\AddChoiceJson $identifier): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier);
        return $result;
    }
}
