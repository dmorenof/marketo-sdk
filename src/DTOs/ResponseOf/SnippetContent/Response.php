<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ResponseOf\SnippetContent;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\Collections\CustomActivity\ErrorsCollection $errors;
    public string $requestId;
    public \MarketoSDK\Collections\ResponseOf\SnippetContent\Response\ResultCollection $result;
    public bool $success;
    public \MarketoSDK\Collections\StringCollection $warnings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \MarketoSDK\Collections\CustomActivity\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Error::class)) : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \MarketoSDK\Collections\ResponseOf\SnippetContent\Response\ResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Snippet\Content\Response::class)) : parent::assignMember($name, $value),
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            'warnings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->warnings = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
