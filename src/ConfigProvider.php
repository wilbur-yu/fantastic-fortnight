<?php

declare(strict_types=1);

/**
 * This file is part of project burton.
 *
 * @author   wenbo@wenber.club
 * @link     https://github.com/wilbur-yu/hyperf-translatable
 */

namespace WilburYu\HyperfTranslatable;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                'id' => 'config',
                'description' => 'The config for wilbur-yu/hyperf-translatable',
                'source' => __DIR__.'/../publish/translatable.php',
                'destination' => BASE_PATH.'/config/autoload/translatable.php',
            ],
        ];
    }
}
