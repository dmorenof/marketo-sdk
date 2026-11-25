<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Userservice\Management\V1\Users;

final class AllusersJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'includeRoleWorkspace' => 'includeRoleWorkspace',
        'pageOffset' => 'pageOffset',
        'pageSize' => 'pageSize',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'pageOffset' => [
        'format' => 'int32',
    ],
    'pageSize' => [
        'format' => 'int32',
    ],
];

    public ?bool $includeRoleWorkspace;
    public ?int $pageOffset {
        set {
            $this->assigning('pageOffset', $value);
            $this->pageOffset = $value;
        }
    }
    public ?int $pageSize {
        set {
            $this->assigning('pageSize', $value);
            $this->pageSize = $value;
        }
    }
}
