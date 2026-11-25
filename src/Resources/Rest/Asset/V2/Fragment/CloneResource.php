<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Fragment;

final class CloneResource extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v2/fragment/clone',
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
                'type' => '\\MarketoSDK\\DTOs\\FragmentNewResponse',
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
     * Clone Fragment
     *
     * Clones an existing fragment. Required Permissions: Read-Write Assets, Access Design Studio, Edit Snippet.
     */
    public function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\CloneResource $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
