<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Leads\Export\ByExportId;

final class FileJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/leads/export/{exportId}/file.json [operationId: getExportLeadsFileUsingGET] */
    /**
     * Get Export Lead File
     *
     * Returns the file content of an export job. The export job must be in "Completed" state. Use Get Export Lead Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Lead<br><br>The file format is specified by calling the Create Export Lead Job endpoint. The following is an example of the default file format ("CSV").<br><br><code>firstName,lastName,email</code><br><code>Marvin,Gaye,marvin.gaye&#64;motown.com</code>
     */
    public static function get(string $exportId, ?\MarketoSDK\GetParams\Bulk\V1\Leads\Export\ByExportId\FileJson $params = null): \MarketoSDK\DTOs\ObservableOfInputStreamRangeContent
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Leads\Export\ByExportId\FileJson::class)->get($exportId, $params);
    }

}
