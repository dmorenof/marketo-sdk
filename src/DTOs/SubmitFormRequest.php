<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class SubmitFormRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'formId',
    'input',
];

    protected const array VALIDATION = [
    'formId' => [
        'format' => 'int32',
    ],
    'programId' => [
        'format' => 'int32',
    ],
];

    /**
     * Id of the form
     * Format: int32
     */
    public int $formId {
        set {
            $this->assigning('formId', $value);
            $this->formId = $value;
        }
    }
    /**
     * Single array item that contains form fields and visitor data to use during a form submittal
     */
    public \MarketoSDK\Collections\SubmitFormRequest\InputCollection $input;
    /**
     * Id of the program to add lead and/or program member custom fields to
     * Format: int32
     */
    public int $programId {
        set {
            $this->assigning('programId', $value);
            $this->programId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'formId' => is_int($value) ? $this->formId = $value : parent::assignMember($name, $value),
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\SubmitFormRequest\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Form::class)) : parent::assignMember($name, $value),
            'programId' => is_int($value) ? $this->programId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
