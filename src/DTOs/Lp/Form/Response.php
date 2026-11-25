<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lp\Form;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'buttonLabel',
        'buttonLocation',
        'folder',
        'fontFamily',
        'fontSize',
        'knownVisitor',
        'labelPosition',
        'language',
        'locale',
        'progressiveProfiling',
        'status',
        'thankYouList',
        'theme',
        'waitingLabel',
    ];

    protected const array VALIDATION = [
        'buttonLocation' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Label text of the button
     */
    public string $buttonLabel;
    /**
     * Location in pixels of the button relative to the left of the form
     * Format: int32
     */
    public int $buttonLocation {
        set {
            $this->assigning('buttonLocation', $value);
            $this->buttonLocation = $value;
        }
    }
    /**
     * Datetime the asset was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Description of the asset
     */
    public string $description;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * font-family property for the form
     */
    public string $fontFamily;
    /**
     * font-size property of the form
     */
    public string $fontSize;
    /**
     * Id of the asset
     * Format: int64
     */
    public int $id;
    /**
     * Known visitor behavior for the form
     */
    public \MarketoSDK\DTOs\Form\KnownVisitorDTO $knownVisitor;
    /**
     * Default positioning of labels.
     */
    public string $labelPosition;
    /**
     * Language of the form
     */
    public string $language;
    /**
     * Locale of the form
     */
    public string $locale;
    /**
     * Name of the asset
     */
    public string $name;
    /**
     * Whether progressive profiling is enabled for the form
     */
    public bool $progressiveProfiling;
    /**
     * Status filter for draft or approved versions
     */
    public \MarketoSDK\Enums\Lp\Form\Response\StatusEnum $status;
    /**
     * List of thank you page behaviors for the form
     */
    public \MarketoSDK\Collections\Lp\Form\Response\YouListCollection $thankYouList;
    /**
     * CSS theme for the form to use
     */
    public string $theme;
    /**
     * Datetime the asset was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Url of the asset in the Marketo UI
     */
    public string $url;
    /**
     * Waiting text of the button
     */
    public string $waitingLabel;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonLabel' => is_string($value) ? $this->buttonLabel = $value : parent::assignMember($name, $value),
            'buttonLocation' => is_int($value) ? $this->buttonLocation = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'fontFamily' => is_string($value) ? $this->fontFamily = $value : parent::assignMember($name, $value),
            'fontSize' => is_string($value) ? $this->fontSize = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'knownVisitor' => $value instanceof \stdClass ? $this->knownVisitor = new \MarketoSDK\DTOs\Form\KnownVisitorDTO($value) : parent::assignMember($name, $value),
            'labelPosition' => is_string($value) ? $this->labelPosition = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'progressiveProfiling' => is_bool($value) ? $this->progressiveProfiling = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\Lp\Form\Response\StatusEnum::from($value) : parent::assignMember($name, $value),
            'thankYouList' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->thankYouList = new \MarketoSDK\Collections\Lp\Form\Response\YouListCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Form\ThankYouPageDTO::class)) : parent::assignMember($name, $value),
            'theme' => is_string($value) ? $this->theme = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'waitingLabel' => is_string($value) ? $this->waitingLabel = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
