<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads;

final class SubmitFormJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/leads/submitForm.json [operationId: SubmitFormUsingPOST] */
    /**
     * Submit Form
     *
     * Upserts a lead and generates a "Fill out Form" activity which is associated back to program and/or campaign. Required Permissions: Read-Write Lead
     */
    public static function post(\MarketoSDK\DTOs\SubmitFormRequest $payload): \MarketoSDK\DTOs\ResponseOf\SubmitForm
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\SubmitFormJson::class)->post($payload);
    }

}
