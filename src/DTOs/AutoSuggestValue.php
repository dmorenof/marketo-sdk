<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class AutoSuggestValue extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
        'workspaceId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Display name of the suggested value
     */
    public string $displayName;
    /**
     * Id of the suggested value
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the suggested value
     */
    public string $name;
    /**
     * Name of the workspace containing the value
     */
    public string $workspace;
    /**
     * Id of the workspace containing the value
     * Format: int32
     */
    public int $workspaceId {
        set {
            $this->assigning('workspaceId', $value);
            $this->workspaceId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            'workspaceId' => is_int($value) ? $this->workspaceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
