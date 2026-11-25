<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Activities\Export\ByExportId;

final class FileJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/activities/export/{exportId}/file.json [operationId: getExportActivitiesFileUsingGET] */
    /**
     * Get Export Activity File
     *
     * Returns the file content of an export job. The export job must be in "Completed" state. Use Get Export Activity Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Activity<br><br>The file format is specified by calling the Create Export Activity Job endpoint. The following is an example of the default file format ("CSV"). Note that the "attributes" field is formatted as JSON.<br><br><code>marketoGUID,leadId,activityDate,activityTypeId,campaignId,primaryAttributeValueId,primaryAttributeValue, attributes</code><br><code>122323,6,2013-09-26T06:56:35+0000,12,11,6,Owyliphys Iledil,[{"name":"Source Type","value":"Web page visit"}]</code>
     */
    public static function get(string $exportId, ?\MarketoSDK\GetParams\Bulk\V1\Activities\Export\ByExportId\FileJson $params = null): \MarketoSDK\DTOs\ObservableOfInputStreamRangeContent
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Activities\Export\ByExportId\FileJson::class)->get($exportId, $params);
    }

}
