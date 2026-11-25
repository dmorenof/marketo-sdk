<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\Members\Export\ByExportId;

final class FileJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/program/members/export/{exportId}/file.json [operationId: getExportProgramMembersFileUsingGET] */
    /**
     * Get Export Program Member File
     *
     * Returns the file content of an export job. The export job must be in "Completed" state. Use Get Export Program Member Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Lead<br><br>The file format is specified by calling the Create Export Program Member Job endpoint. The following is an example of the default file format ("CSV").<br><br><code>firstName,lastName,email</code><br><code>Marvin,Gaye,marvin.gaye&#64;motown.com</code>
     */
    public static function get(string $exportId, ?\MarketoSDK\GetParams\Bulk\V1\Program\Members\Export\ByExportId\FileJson $params = null): \MarketoSDK\DTOs\ObservableOfInputStreamRangeContent
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\Export\ByExportId\FileJson::class)->get($exportId, $params);
    }

}
