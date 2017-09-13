<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

$iterator = Symfony\Component\Finder\Finder::create()
    ->files()
    ->in(__DIR__ . '/../../railt/src/Railt')
    ->name('*.php');

$options = [
    'theme'                => 'default',
    'title'                => 'Railt API Documentation',
    'build_dir'            => __DIR__ . '/../api',
    'cache_dir'            => __DIR__ . '/.cache',
];

return new Sami\Sami($iterator, $options);
