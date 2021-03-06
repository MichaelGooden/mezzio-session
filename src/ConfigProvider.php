<?php

/**
 * @see       https://github.com/mezzio/mezzio-session for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-session/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-session/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Mezzio\Session;

use Zend\Expressive\Session\SessionMiddleware as LegacySessionMiddleware;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies(): array
    {
        return [
            // Legacy Zend Framework aliases
            'aliases'   => [
                LegacySessionMiddleware::class => SessionMiddleware::class,
            ],
            'factories' => [
                SessionMiddleware::class => SessionMiddlewareFactory::class,
            ],
        ];
    }
}
