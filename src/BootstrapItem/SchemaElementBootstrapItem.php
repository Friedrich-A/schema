<?php
declare(strict_types=1);
namespace KiwiSuite\Schema\BootstrapItem;

use KiwiSuite\Contract\Application\BootstrapItemInterface;
use KiwiSuite\Contract\Application\ConfiguratorInterface;
use KiwiSuite\Schema\ElementConfigurator;

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