<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * InviteUserRequest
 */
final class InviteUserRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'emailAddress',
    'firstName',
    'lastName',
    'userRoleWorkspaces',
];

    protected const array VALIDATION = [
    'emailAddress' => [
        'minLength' => 1,
        'maxLength' => 2147483647,
        'pattern' => '^("?)(?:[^"])(?:[-\\w.!#$%&\\\'*+\\/=?^_`{|}~])*\\1@(\\w[-\\w]{0,62}\\.)+[A-Za-z]{2,63}$',
    ],
];

    /**
     * Whether the user is API-Only.  Default is false
     */
    public bool $apiOnly;
    /**
     * User email address
     */
    public string $emailAddress {
        set {
            $this->assigning('emailAddress', $value);
            $this->emailAddress = $value;
        }
    }
    /**
     * Date and time when user login expires.  Must be valid ISO-8601 string.  See <a href="http://developers.marketo.com/rest-api/lead-database/fields/field-types/">Datetime</a> field type description.
     */
    public string $expiresAt;
    /**
     * User first name
     */
    public string $firstName;
    /**
     * User last name
     */
    public string $lastName;
    /**
     * Reason for user invitation
     */
    public string $reason;
    public \MarketoSDK\Collections\Add\Roles\Request\InputCollection $userRoleWorkspaces;
    /**
     * Marketo Identity users should use an email address. Adobe Identity users should use the generated GUID.
     */
    public string $userid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiOnly' => is_bool($value) ? $this->apiOnly = $value : parent::assignMember($name, $value),
            'emailAddress' => is_string($value) ? $this->emailAddress = $value : parent::assignMember($name, $value),
            'expiresAt' => is_string($value) ? $this->expiresAt = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'userRoleWorkspaces' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->userRoleWorkspaces = new \MarketoSDK\Collections\Add\Roles\Request\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\User\RoleWorkspaceId::class)) : parent::assignMember($name, $value),
            'userid' => is_string($value) ? $this->userid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
