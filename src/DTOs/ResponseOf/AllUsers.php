<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ResponseOf;

/**
 * ResponseOfAllUsers
 */
final class AllUsers extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apiOnly',
        'emailAddress',
        'firstName',
        'id',
        'lastName',
        'userid',
    ];

    protected const array VALIDATION = [
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
     * User last name
     */
    public string $lastName;
    /**
     * Role and workspace assignments for the user.  Only included when includeRoleWorkspace is true.  Requires the Access Roles permission
     */
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
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'userRoleWorkspaces' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->userRoleWorkspaces = new \MarketoSDK\Collections\ResponseOf\AllUsers\RoleWorkspacesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\User\RoleWorkspace::class)) : parent::assignMember($name, $value),
            'userid' => is_string($value) ? $this->userid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
