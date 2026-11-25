<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Activities\Export;

final class CreateJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/activities/export/create.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Export\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Export\\Activity\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create Export Activity Job
     *
     * Create export job for search criteria defined via "filter" parameter. Request returns the "exportId" which is passed as a parameter in subsequent calls to Bulk Export Activities endpoints. Use Enqueue Export Activity Job endpoint to queue the export job for processing. Use Get Export Activity Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Activity
     */
    public function post(?\MarketoSDK\DTOs\Export\Activity\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Export\Response $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
