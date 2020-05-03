<?php
namespace TDDExample;

class Category
{
    /** @var array<Product> */
    private array $products = [];

    public function contains(Product $product): bool
    {
        return in_array($product, $this->products);
    }

    public function addProduct(Product $product) : void
    {
        $this->products[] = $product;
    }
}
