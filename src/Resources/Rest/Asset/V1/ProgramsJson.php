<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class ProgramsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/programs.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\BrowseAllPrograms',
    ];

    /**
     * Get Programs
     *
     * Retrieves the list of accessible programs from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\ProgramsJson $params = null): \MarketoSDK\DTOs\ResponseOf\BrowseAllPrograms
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\BrowseAllPrograms $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/programs.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Program\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\Program\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Program
     *
     * Creates a new program. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\Program\Request $payload): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Program\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
