<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class UsedByJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/form/{id}/usedBy.json [operationId: getFormUsedByUsingGET] */
    /**
     * Get Form Used By
     *
     * Returns a list of asset records which depend on a given form. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Form\ById\UsedByJson $params = null): \MarketoSDK\DTOs\ResponseOf\FormUsedBy\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\UsedByJson::class)->get($id, $params);
    }
}
