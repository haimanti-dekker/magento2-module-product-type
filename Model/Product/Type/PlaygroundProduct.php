<?php
/**
 * @author H.S.M. Dekker <dev@haimantidekker.nl>
 * @package Snoepkaasjes_ProductType
 *
 */

declare(strict_types=1);

namespace Snoepkaasjes\ProductType\Model\Product\Type;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\AbstractType;

class PlaygroundProduct extends AbstractType
{
    /**
     * Delete data specific for Playground product type
     *
     * @param Product $product
     * @return void
     */
    public function deleteTypeSpecificData(Product $product)
    {
    }
}
