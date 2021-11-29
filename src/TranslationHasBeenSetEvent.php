<?php

declare(strict_types=1);

/**
 * This file is part of project burton.
 *
 * @author   wenbo@wenber.club
 * @link     https://github.com/wilbur-yu/hyperf-translatable
 */

namespace WilburYu\HyperfTranslatable;

class TranslationHasBeenSetEvent
{
    public function __construct(
        public mixed $model,
        public string $key,
        public string $locale,
        public mixed $oldValue,
        public mixed $newValue,
    ) {
        //
    }
}
