<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId;

final class RemoveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/remove.json',
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
     * Remove Flow Step
     *
     * Removes a flow step and all its choices from a smart campaign. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\RemoveJson $identifier): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier);
        return $result;
    }
}
