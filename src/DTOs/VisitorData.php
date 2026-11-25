<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Page visit related data. Used to populate additional activity fields for filtering and triggering.
 */
final class VisitorData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Client IP address. IPv4 format. Used to populate inferred fields on upserted lead record.
     */
    public string $leadClientIpAddress;
    /**
     * Web page that hosts the form. Must be a fully formed URL
     */
    public string $pageURL;
    /**
     * Web page query string. Contains one or more ampersand delimited key=value pairs
     */
    public string $queryString;
    /**
     * User agent of browser hosting the form
     */
    public string $userAgentString;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'leadClientIpAddress' => is_string($value) ? $this->leadClientIpAddress = $value : parent::assignMember($name, $value),
            'pageURL' => is_string($value) ? $this->pageURL = $value : parent::assignMember($name, $value),
            'queryString' => is_string($value) ? $this->queryString = $value : parent::assignMember($name, $value),
            'userAgentString' => is_string($value) ? $this->userAgentString = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
