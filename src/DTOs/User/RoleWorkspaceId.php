<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\User;

final class RoleWorkspaceId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accessRoleId',
        'workspaceId',
    ];

    protected const array VALIDATION = [
        'accessRoleId' => [
            'format' => 'int32',
        ],
        'workspaceId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * User role id
     * Format: int32
     */
    public int $accessRoleId {
        set {
            $this->assigning('accessRoleId', $value);
            $this->accessRoleId = $value;
        }
    }
    /**
     * User workspace id
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
            'accessRoleId' => is_int($value) ? $this->accessRoleId = $value : parent::assignMember($name, $value),
            'workspaceId' => is_int($value) ? $this->workspaceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
