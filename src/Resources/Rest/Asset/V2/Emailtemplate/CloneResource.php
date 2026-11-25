<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate;

final class CloneResource extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v2/emailtemplate/clone',
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\MarketoSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\MarketoSDK\\DTOs\\Email\\TemplateNew\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneAssetRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Clone Email Template
     *
     * Clones an existing email template. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email Template.
     */
    public function post(\MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\CloneResource $params): \MarketoSDK\DTOs\Email\TemplateNew\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\Email\TemplateNew\Response|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
