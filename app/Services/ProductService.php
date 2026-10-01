<?php
namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductService
{
    public function __construct(protected ProductRepositoryInterface $productRepo)
    {}

    public function getAllProduct()
    {
        return $this->productRepo->getAll();
    }

    public function getByIdProduct(int $id)
    {
        return $this->productRepo->getById($id);
    }

    public function createProduct(array $data) 
    {
        return $this->productRepo->create($data);
    }

    public function updateProduct(int $id, array $data)
    {
        return $this->productRepo->update($id, $data);
    }

    public function deleteProduct(int $id)
    {
        return $this->productRepo->delete($id);
    }

    public function getByNameProduct(string $name)
    {
        return $this->productRepo->getByName($name);
    }
}