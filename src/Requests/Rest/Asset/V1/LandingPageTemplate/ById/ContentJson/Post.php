<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\LandingPageTemplate\ById\ContentJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
    ];

    /**
     * content
     */
    public string $content;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
