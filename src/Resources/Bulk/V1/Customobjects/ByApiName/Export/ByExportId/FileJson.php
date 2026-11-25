<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export\ByExportId;

final class FileJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/customobjects/{apiName}/export/{exportId}/file.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ObservableOfInputStreamRangeContent',
    ];

    /**
     * Get Export Custom Object File
     *
     * Returns the file content of an export job. The export job must be in "Completed" state. Use Get Export Custom Object Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Custom Object<br><br>The file format is specified by calling the Create Export Custom Object Job endpoint. The following is an example of the default file format ("CSV").<br><br><code>leadId,marketoGUID,itemName</code><br><code>11,c93f0494-bbd9-44e8-9c0e-dae9b525073f,Hoka One One Mach 4</code>
     */
    public function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\FileJson $identifier, ?\MarketoSDK\GetParams\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\FileJson $params = null): \MarketoSDK\DTOs\ObservableOfInputStreamRangeContent
    {
        /** @var \MarketoSDK\DTOs\ObservableOfInputStreamRangeContent $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }
}
