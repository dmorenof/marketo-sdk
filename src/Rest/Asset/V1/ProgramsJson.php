<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class ProgramsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/programs.json [operationId: browseProgramsUsingGET] */
    /**
     * Get Programs
     *
     * Retrieves the list of accessible programs from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\ProgramsJson $params = null): \MarketoSDK\DTOs\ResponseOf\BrowseAllPrograms
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\ProgramsJson::class)->get($params);
    }

    /** POST /rest/asset/v1/programs.json [operationId: createProgramUsingPOST] */
    /**
     * Create Program
     *
     * Creates a new program. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\Program\Request $payload): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\ProgramsJson::class)->post($payload);
    }
}
