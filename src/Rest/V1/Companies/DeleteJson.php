<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Companies;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/companies/delete.json [operationId: deleteCompaniesUsingPOST] */
    /**
     * Delete Companies
     *
     * Deletes the included list of company records from the destination instance. Required Permissions: Read-Write Company
     */
    public static function post(\MarketoSDK\DTOs\Delete\Company\Request $payload): \MarketoSDK\DTOs\ResponseOf\Company
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Companies\DeleteJson::class)->post($payload);
    }

}
