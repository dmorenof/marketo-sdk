<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class RichTextJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/richText.json [operationId: addRichTextFieldUsingPOST] */
    /**
     * Add Rich Text Field
     *
     * Adds a rich-text type field to the form. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Add\RichText\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\RichTextJson::class)->post($id, $payload);
    }
}
