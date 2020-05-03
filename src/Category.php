<?php
namespace TDDExample;

class Category
{
    public function contains(Product $product): bool
    {
        return true;
    }
}
