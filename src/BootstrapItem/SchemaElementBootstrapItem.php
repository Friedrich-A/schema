<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Schema\BootstrapItem;

use Ixocreate\Contract\Application\BootstrapItemInterface;
use Ixocreate\Contract\Application\ConfiguratorInterface;
use Ixocreate\Schema\ElementConfigurator;

final class SchemaElementBootstrapItem implements BootstrapItemInterface
{
    /**
     * @return mixed
     */
    public function getConfigurator(): ConfiguratorInterface
    {
        return new ElementConfigurator();
    }

    /**
     * @return string
     */
    public function getVariableName(): string
    {
        return 'element';
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return 'schema_element.php';
    }
}
