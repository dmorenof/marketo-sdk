<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1;

final class CampaignsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/campaigns.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Campaign',
        'querySerialization' => [
            'id' => 'multi',
            'name' => 'multi',
            'programName' => 'multi',
            'workspaceName' => 'multi',
        ],
    ];

    /**
     * Get Campaigns
     *
     * Returns a list of campaign records. Required Permissions: Read-Only Campaigns, Read-Write Campaigns<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/asset/#operation/getAllSmartCampaignsGET">Get Smart Campaigns</a> endpoint instead.
     */
    public function get(?\MarketoSDK\GetParams\Rest\V1\CampaignsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Campaign
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Campaign $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
