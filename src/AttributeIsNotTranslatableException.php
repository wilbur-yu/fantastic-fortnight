<?php

declare(strict_types=1);

/**
 * This file is part of project burton.
 *
 * @author   wenbo@wenber.club
 * @link     https://github.com/wilbur-yu/hyperf-translatable
 */

namespace WilburYu\HyperfTranslatable;

use Exception;

class AttributeIsNotTranslatableException extends Exception
{
    public static function make(string $key, $model): static
    {
        $translatableAttributes = implode(', ', $model->getTranslatableAttributes());

        return new static(
            "Cannot translate attribute `$key` as it's not one of the translatable attributes: `$translatableAttributes`"
        );
    }
}
