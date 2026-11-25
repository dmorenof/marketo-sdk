<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\JsonNode;

enum NodeTypeEnum: string
{
    case ARRAY_ = 'ARRAY';
    case BINARY = 'BINARY';
    case BOOLEAN = 'BOOLEAN';
    case MISSING = 'MISSING';
    case NULL_ = 'NULL';
    case NUMBER = 'NUMBER';
    case OBJECT_ = 'OBJECT';
    case POJO = 'POJO';
    case STRING_ = 'STRING';
}
