<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId;

final class ReorderJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}/reorder.json',
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
     * Reorder Flow Step Choice
     *
     * Moves a choice to a new position within a flow step. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\ReorderJson $identifier, \MarketoSDK\PostParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\ReorderJson $params): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }
}
