<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ResponseOf;

/**
 * ResponseOfUser
 */
final class User extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apiOnly',
        'emailAddress',
        'expiresAt',
        'failedDeviceCode',
        'failedLogins',
        'firstName',
        'id',
        'isLocked',
        'lastLoginAt',
        'lastName',
        'lockedReason',
        'optedIn',
        'userRoleWorkspaces',
        'userid',
    ];

    protected const array VALIDATION = [
        'failedDeviceCode' => [
            'format' => 'int32',
        ],
        'failedLogins' => [
            'format' => 'int32',
        ],
        'id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Whether the user is API-Only
     */
    public bool $apiOnly;
    /**
     * User email address
     */
    public string $emailAddress;
    /**
     * Array of errors that occurred if the request was unsuccessful
     */
    public \MarketoSDK\Collections\CustomActivity\ErrorsCollection $errors;
    /**
     * Date and time when user login expires.  Example: yyyy-MM-dd'T'HH:mm:ss.SSS't'Z
     * Example: "yyyy-MM-dd'T'HH:mm:ss.SSS't'Z"
     */
    public string $expiresAt;
    /**
     * Device code for user login failure
     * Format: int32
     */
    public int $failedDeviceCode {
        set {
            $this->assigning('failedDeviceCode', $value);
            $this->failedDeviceCode = $value;
        }
    }
    /**
     * Count of user login failures
     * Format: int32
     */
    public int $failedLogins {
        set {
            $this->assigning('failedLogins', $value);
            $this->failedLogins = $value;
        }
    }
    /**
     * User first name
     */
    public string $firstName;
    /**
     * User identifier
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Whether user account is locked
     */
    public bool $isLocked;
    /**
     * Date and time of user's most recent login.  Example: yyyy-MM-dd'T'HH:mm:ss.SSS't'Z
     * Example: "yyyy-MM-dd'T'HH:mm:ss.SSS't'Z"
     */
    public string $lastLoginAt;
    /**
     * User last name
     */
    public string $lastName;
    /**
     * Reason that user account is locked
     */
    public string $lockedReason;
    /**
     * Whether user has opted in
     */
    public bool $optedIn;
    public \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection $userRoleWorkspaces;
    /**
     * Marketo Identity users should use an email address. Adobe Identity users should use the generated GUID.
     */
    public string $userid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiOnly' => is_bool($value) ? $this->apiOnly = $value : parent::assignMember($name, $value),
            'emailAddress' => is_string($value) ? $this->emailAddress = $value : parent::assignMember($name, $value),
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \MarketoSDK\Collections\CustomActivity\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Error::class)) : parent::assignMember($name, $value),
            'expiresAt' => is_string($value) ? $this->expiresAt = $value : parent::assignMember($name, $value),
            'failedDeviceCode' => is_int($value) ? $this->failedDeviceCode = $value : parent::assignMember($name, $value),
            'failedLogins' => is_int($value) ? $this->failedLogins = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isLocked' => is_bool($value) ? $this->isLocked = $value : parent::assignMember($name, $value),
            'lastLoginAt' => is_string($value) ? $this->lastLoginAt = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'lockedReason' => is_string($value) ? $this->lockedReason = $value : parent::assignMember($name, $value),
            'optedIn' => is_bool($value) ? $this->optedIn = $value : parent::assignMember($name, $value),
            'userRoleWorkspaces' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->userRoleWorkspaces = new \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\User\RoleWorkspace::class)) : parent::assignMember($name, $value),
            'userid' => is_string($value) ? $this->userid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
