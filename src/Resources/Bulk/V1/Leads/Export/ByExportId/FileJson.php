<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Leads\Export\ByExportId;

final class FileJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/leads/export/{exportId}/file.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ObservableOfInputStreamRangeContent',
    ];

    /**
     * Get Export Lead File
     *
     * Returns the file content of an export job. The export job must be in "Completed" state. Use Get Export Lead Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Lead<br><br>The file format is specified by calling the Create Export Lead Job endpoint. The following is an example of the default file format ("CSV").<br><br><code>firstName,lastName,email</code><br><code>Marvin,Gaye,marvin.gaye&#64;motown.com</code>
     */
    public function get(string $exportId, ?\MarketoSDK\GetParams\Bulk\V1\Leads\Export\ByExportId\FileJson $params = null): \MarketoSDK\DTOs\ObservableOfInputStreamRangeContent
    {
        /** @var \MarketoSDK\DTOs\ObservableOfInputStreamRangeContent $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['exportId' => $exportId], parameters: $params);
        return $result;
    }
}
