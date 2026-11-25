<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate;

final class Filter extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v2/emailtemplate/filter [operationId: filterContentUsingGET_emailtemplate] */
    /**
     * List Email Templates
     *
     * Filters and lists email templates by the given criteria. Required Permissions: Read-Only Assets, Access Design Studio, Access Email Template.
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V2\Emailtemplate\Filter $params): \MarketoSDK\DTOs\Email\TemplateFilter\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\Filter::class)->get($params);
    }
}
