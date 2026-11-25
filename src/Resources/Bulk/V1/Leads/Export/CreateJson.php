<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Leads\Export;

final class CreateJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/leads/export/create.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Export\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Export\\Lead\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create Export Lead Job
     *
     * Create export job for search criteria defined via "filter" parameter. Request returns the "exportId" which is passed as a parameter in subsequent calls to Bulk Export Leads endpoints. Use Enqueue Export Lead Job endpoint to queue the export job for processing. Use Get Export Lead Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Lead
     */
    public function post(?\MarketoSDK\DTOs\Export\Lead\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Export\Response $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
