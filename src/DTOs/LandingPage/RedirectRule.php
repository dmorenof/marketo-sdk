<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\LandingPage;

final class RedirectRule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'hostname',
    'id',
    'redirectFrom',
    'redirectFromUrl',
    'redirectTo',
    'redirectToUrl',
    'updatedAt',
];

    /**
     * Datetime the landing page redirect rule was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * The hostname for the landing pages. Branding domain or alias. Max 255 characters.
     */
    public string $hostname;
    /**
     * Internal id for landing page redirect rule
     * Format: int64
     */
    public int $id;
    /**
     * JSON representation of redirect from landing page, with members 'type' which may be 'landingPageId' or 'path', and 'value'
     */
    public \MarketoSDK\DTOs\RedirectFrom $redirectFrom;
    /**
     * Redirect 'from' URL of the Landing Page. Combination of the hostname and redirectFrom landing page or path
     */
    public string $redirectFromUrl;
    /**
     * JSON representation of redirect to landing page, with members 'type' which may be 'landingPageId' or 'url', and 'value'
     */
    public \MarketoSDK\DTOs\RedirectTo $redirectTo;
    /**
     * Redirect 'to' URL of the Landing Page. Could be a Marketo landing page or non-Marketo URL.
     */
    public string $redirectToUrl;
    /**
     * Datetime the landing page redirect rule was most recently updated
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'hostname' => is_string($value) ? $this->hostname = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'redirectFrom' => $value instanceof \stdClass ? $this->redirectFrom = new \MarketoSDK\DTOs\RedirectFrom($value) : parent::assignMember($name, $value),
            'redirectFromUrl' => is_string($value) ? $this->redirectFromUrl = $value : parent::assignMember($name, $value),
            'redirectTo' => $value instanceof \stdClass ? $this->redirectTo = new \MarketoSDK\DTOs\RedirectTo($value) : parent::assignMember($name, $value),
            'redirectToUrl' => is_string($value) ? $this->redirectToUrl = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
