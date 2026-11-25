<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Campaigns;

final class CampaignIdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/campaigns/{campaignId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Campaign',
        'validation' => [
            'campaignId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Campaign By Id
     *
     * Returns the record of a campaign by its id. Required Permissions: Read-Only Campaigns, Read-Write Campaigns<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/asset/#operation/getSmartCampaignByIdUsingGET">Get Smart Campaign by Id</a> endpoint instead.
     */
    public function get(int $campaignId): \MarketoSDK\DTOs\ResponseOf\Campaign
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Campaign $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['campaignId' => $campaignId]);
        return $result;
    }
}
