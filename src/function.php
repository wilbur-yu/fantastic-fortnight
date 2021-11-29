<?php

/**
 * This file is part of project burton.
 *
 * @author   wenbo@wenber.club
 * @link     https://github.com/wilbur-yu/hyperf-translatable
 */

use Hyperf\Contract\TranslatorInterface;
use Hyperf\Utils\ApplicationContext;
use Psr\EventDispatcher\EventDispatcherInterface;

if (!function_exists('locale')) {
    function locale(): string
    {
        return ApplicationContext::getContainer()->get(TranslatorInterface::class)->getLocale();
    }
}
if (!function_exists('event')) {
    function event(): EventDispatcherInterface
    {
        return ApplicationContext::getContainer()->get(EventDispatcherInterface::class);
    }
}
