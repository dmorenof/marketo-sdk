<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Create\LpTemplate\Request;

enum TemplateTypeEnum: string
{
    case FreeForm = 'freeForm';
    case Guided = 'guided';
}
