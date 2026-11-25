<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice;

final class ChoiceIdJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}.json',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Update Flow Step Choice
     *
     * Updates a flow step choice's condition and attribute values. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ChoiceIdJson $identifier, ?\MarketoSDK\Requests\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ChoiceIdJson\Post $payload = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, body: $payload);
        return $result;
    }

}
