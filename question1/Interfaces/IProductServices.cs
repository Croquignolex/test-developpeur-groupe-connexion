namespace question1.Interfaces;

using Models;
using Contracts;

public interface IProductServices
{
    Task<Product?> CreateProduct(CreateProductRequest request);
    Task<Product?> GetProductById(int id);
} 