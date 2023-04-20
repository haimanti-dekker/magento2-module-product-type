<?php
/**
 * @author H.S.M. Dekker <dev@haimantidekker.nl>
 * @package Snoepkaasjes_ProductType
 *
 */

declare(strict_types=1);

namespace Snoepkaasjes\ProductType\Tests;

use Magento\Catalog\Model\Product;
use PHPUnit\Framework\TestCase;
use Snoepkaasjes\ProductType\Model\Product\Type\PlaygroundProduct;
use Magento\TestFramework\ObjectManager;


class PlaygroundProductTypeTest extends TestCase
{
    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->customProduct = new PlaygroundProduct();
    }

    /**
     * @return void
     */
    public function customProductTest(): void
    {

    }
}
