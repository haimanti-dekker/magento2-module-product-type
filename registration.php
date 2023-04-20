<?php
/**
 * @author H.S.M. Dekker <dev@haimantidekker.nl>
 * @package Snoepkaasjes_ProductType
 *
 */

declare(strict_types=1);

use  Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Snoepkaasjes_ProductType',
    __DIR__
);
