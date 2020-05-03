<?php
namespace TDDExample;

class Product
{
    private Category $category;

    public function setCategory(Category $category) : void
    {
        $category->addProduct($this);
        $this->category = $category;
    }

    public function getCategory() : Category
    {
        return $this->category;
    }
}
