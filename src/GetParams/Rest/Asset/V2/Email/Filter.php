<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V2\Email;

final class Filter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'xAppType',
        'access_token',
        'workspaceId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'access_token' => 'access_token',
            'createdAtEnd' => 'createdAtEnd',
            'createdAtStart' => 'createdAtStart',
            'folderId' => 'folderId',
            'folderType' => 'folderType',
            'includeArchived' => 'includeArchived',
            'isCreatedByMe' => 'isCreatedByMe',
            'isModifiedByMe' => 'isModifiedByMe',
            'isValueNonNullable' => 'isValueNonNullable',
            'modifiedAtEnd' => 'modifiedAtEnd',
            'modifiedAtStart' => 'modifiedAtStart',
            'name' => 'name',
            'pageIndex' => 'pageIndex',
            'pageSize' => 'pageSize',
            'scriptEngine' => 'scriptEngine',
            'sortKey' => 'sortKey',
            'sortOrder' => 'sortOrder',
            'status' => 'status',
            'templateId' => 'templateId',
            'workspaceId' => 'workspaceId',
        ],
        'header' => [
            'x-app-type' => 'xAppType',
        ],
    ];

    protected const array PROPERTY_MAP = [
        'x-app-type' => 'xAppType',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'xAppType' => 'x-app-type',
    ];

    protected const array VALIDATION = [
        'pageIndex' => [
            'format' => 'int32',
        ],
        'pageSize' => [
            'format' => 'int32',
        ],
        'status' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    public \MarketoSDK\Enums\Rest\Asset\V2\Email\Filter\Get\Header\AppTypeEnum $xAppType;
    public string $access_token;
    public ?string $createdAtEnd;
    public ?string $createdAtStart;
    public ?string $folderId;
    public ?\MarketoSDK\Enums\Rest\Asset\V2\Email\Filter\Get\Query\FolderTypeEnum $folderType;
    public ?bool $includeArchived;
    public ?bool $isCreatedByMe;
    public ?bool $isModifiedByMe;
    public ?string $isValueNonNullable;
    public ?string $modifiedAtEnd;
    public ?string $modifiedAtStart;
    public ?string $name;
    public ?int $pageIndex {
        set {
            $this->assigning('pageIndex', $value);
            $this->pageIndex = $value;
        }
    }
    public ?int $pageSize {
        set {
            $this->assigning('pageSize', $value);
            $this->pageSize = $value;
        }
    }
    public ?string $scriptEngine;
    public ?string $sortKey;
    public ?\MarketoSDK\Enums\Rest\Asset\V2\Email\Filter\Get\Query\SortOrderEnum $sortOrder;
    /** @var list<string>|null */
    public ?array $status;
    public ?string $templateId;
    public string $workspaceId;
}
