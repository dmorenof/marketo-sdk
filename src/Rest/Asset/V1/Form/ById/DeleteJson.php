<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/delete.json [operationId: deleteFormByIdUsingPOST] */
    /**
     * Delete Form
     *
     * Deletes the target form. Forms which are in use by landing pages may not be deleted until they are removed from all landing pages. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\DeleteJson::class)->post($id);
    }
}
