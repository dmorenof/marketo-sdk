<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ProgramMember;

final class Data extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'leadId',
    'FieldApiName',
];

    protected const array PROPERTY_MAP = [
    '{fieldApiName2}' => 'FieldApiName2',
    '{fieldApiName}' => 'FieldApiName',
];
    protected const array WIRE_PROPERTY_MAP = [
    'FieldApiName2' => '{fieldApiName2}',
    'FieldApiName' => '{fieldApiName}',
];

    /**
     * Unique integer id of a lead record
     * Format: int64
     */
    public int $leadId;
    /**
     * API Name of another field to update (and so forth). Must be updateable as described by <a href="/rest-api/endpoint-reference/lead-database-endpoint-reference/#/Leads/describeProgramMemberUsingGET2">Describe Program Member</a> endpoint.
     */
    public string $FieldApiName2;
    /**
     * API Name of field to update. Must be updateable as described by <a href="/rest-api/endpoint-reference/lead-database-endpoint-reference/#/Leads/describeProgramMemberUsingGET2">Describe Program Member</a> endpoint.
     */
    public string $FieldApiName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'leadId' => is_int($value) ? $this->leadId = $value : parent::assignMember($name, $value),
            '{fieldApiName2}' => is_string($value) ? $this->FieldApiName2 = $value : parent::assignMember($name, $value),
            '{fieldApiName}' => is_string($value) ? $this->FieldApiName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
