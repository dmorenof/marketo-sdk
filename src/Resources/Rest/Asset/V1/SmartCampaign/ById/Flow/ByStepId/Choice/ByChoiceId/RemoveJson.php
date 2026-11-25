<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId;

final class RemoveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}/remove.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaignResponseWithFlow',
        'validation' => [
            'choiceId' => [
                'format' => 'int32',
            ],
            'id' => [
                'format' => 'int32',
            ],
            'stepId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Remove Flow Step Choice
     *
     * Removes a specific choice from a flow step. The default choice cannot be removed. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\RemoveJson $identifier): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier);
        return $result;
    }

}
