<?php
/**
 * @author H.S.M. Dekker <dev@haimantidekker.nl>
 * @package Snoepkaasjes_ProductType
 *
 */

declare(strict_types=1);

namespace Snoepkaasjes\ProductType\Test\Unit;

use PHPUnit\Framework\TestCase;
use Magento\Catalog\Model\Product;

class PlaygroundProductTypeTest extends TestCase
{
    /** @var Product|mixed */
    private Product $product;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        /**
         * Set-up the Portfolio Product
         */
        $this->product = $this->getMockBuilder(Product::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->product->method('getTypeId')
            ->willReturn('playground_product');
        $this->product->method('getSku')
                ->willReturn('#dev' . date('dmy'));

        $this->product->expects($this->once())
            ->method('setData')
            ->with('github_repo_url', 'https://github.com')
            ->willReturnSelf();

        $this->product->expects($this->exactly(1))
            ->method('getData')
            ->with('github_repo_url')
            ->willReturnOnConsecutiveCalls(
                'https://github.com'
            );
    }

    /**
     * @return void
     */
    public function testCustomProductType(): void
    {
        $this->assertEquals('playground_product', $this->product->getTypeId());
        $this->assertStringContainsString('dev', $this->product->getSku());

        // Add to Extension Attributes to decouple
        $this->product->setData('github_repo_url', 'https://github.com');
        $this->assertStringContainsString('https://github.com', $this->product->getData('github_repo_url'));
    }
}
