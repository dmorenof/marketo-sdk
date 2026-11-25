<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ResponseOf;

/**
 * ResponseOfInvitedUser
 */
final class InvitedUser extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'createdAt',
        'emailAddress',
        'expiresAt',
        'firstName',
        'id',
        'lastName',
        'status',
        'subscriptionId',
        'updatedAt',
        'userid',
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Date and time when user login was created.  Example: yyyy-MM-dd'T'HH:mm:ss.SSS't'Z
     * Example: "yyyy-MM-dd'T'HH:mm:ss.SSS't'Z"
     */
    public string $createdAt;
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
     * User status
     */
    public \MarketoSDK\Enums\ResponseOf\InvitedUser\StatusEnum $status;
    /**
     * Subscription ID
     */
    public string $subscriptionId;
    /**
     * Date and time when user login was last updated.  Example: yyyy-MM-dd'T'HH:mm:ss.SSS't'Z
     * Example: "yyyy-MM-dd'T'HH:mm:ss.SSS't'Z"
     */
    public string $updatedAt;
    /**
     * Marketo Identity users should use an email address. Adobe Identity users should use the generated GUID.
     */
    public string $userid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'emailAddress' => is_string($value) ? $this->emailAddress = $value : parent::assignMember($name, $value),
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \MarketoSDK\Collections\CustomActivity\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Error::class)) : parent::assignMember($name, $value),
            'expiresAt' => is_string($value) ? $this->expiresAt = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\ResponseOf\InvitedUser\StatusEnum::from($value) : parent::assignMember($name, $value),
            'subscriptionId' => is_string($value) ? $this->subscriptionId = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'userid' => is_string($value) ? $this->userid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
