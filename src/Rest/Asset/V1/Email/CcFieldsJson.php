<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email;

final class CcFieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/email/ccFields.json [operationId: getEmailCCFieldsUsingGET] */
    /**
     * Get Email CC Fields
     *
     * Returns the set of fields enabled for Email CC in the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\EmailCCFields\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\CcFieldsJson::class)->get();
    }

}
