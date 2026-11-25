<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Get\Files;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxReturn' => [
        'format' => 'int32',
    ],
    'offset' => [
        'format' => 'int32',
    ],
];

    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Maximum number of records to return. Max 200, default 20
     * Format: int32
     */
    public int $maxReturn {
        set {
            $this->assigning('maxReturn', $value);
            $this->maxReturn = $value;
        }
    }
    /**
     * Integer offset for paging
     * Format: int32
     */
    public int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'maxReturn' => is_int($value) ? $this->maxReturn = $value : parent::assignMember($name, $value),
            'offset' => is_int($value) ? $this->offset = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
