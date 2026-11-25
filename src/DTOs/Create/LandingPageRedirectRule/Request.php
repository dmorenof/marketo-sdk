<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\LandingPageRedirectRule;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'hostname',
    'redirectFrom',
    'redirectTo',
];

    /**
     * The hostname for the landing pages. Branding domain or alias. Max 255 characters
     */
    public string $hostname;
    /**
     * JSON representation of redirect from landing page, with members 'type' which may be 'landingPageId' or 'path', and 'value'
     */
    public \MarketoSDK\DTOs\RedirectFrom $redirectFrom;
    /**
     * JSON representation of redirect to landing page, with members 'type' which may be 'landingPageId' or 'url', and 'value'
     */
    public \MarketoSDK\DTOs\RedirectTo $redirectTo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hostname' => is_string($value) ? $this->hostname = $value : parent::assignMember($name, $value),
            'redirectFrom' => $value instanceof \stdClass ? $this->redirectFrom = new \MarketoSDK\DTOs\RedirectFrom($value) : parent::assignMember($name, $value),
            'redirectTo' => $value instanceof \stdClass ? $this->redirectTo = new \MarketoSDK\DTOs\RedirectTo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
