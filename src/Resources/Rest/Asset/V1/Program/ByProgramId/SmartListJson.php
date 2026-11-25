<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Program\ByProgramId;

final class SmartListJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/program/{programId}/smartList.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
    ];

    /**
     * Get Smart List by Program Id
     *
     * Retrieves a Smart List record by its Email Program id. Required Permissions: Read-Asset or Read-Write Asset
     */
    public function get(int $programId, ?\MarketoSDK\GetParams\Rest\Asset\V1\Program\ByProgramId\SmartListJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['programId' => $programId], parameters: $params);
        return $result;
    }
}
