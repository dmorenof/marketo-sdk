<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\UserAttributes;

/**
 * UpdateUserAttributesRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
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
     * Date and time when user login expires.  Example: yyyy-MM-dd'T'HH:mm:ss.SSS't'Z
     * Example: "yyyyMMdd'T'HH:mm:ss'.'S't'Z"
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiOnly' => is_bool($value) ? $this->apiOnly = $value : parent::assignMember($name, $value),
            'emailAddress' => is_string($value) ? $this->emailAddress = $value : parent::assignMember($name, $value),
            'expiresAt' => is_string($value) ? $this->expiresAt = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
