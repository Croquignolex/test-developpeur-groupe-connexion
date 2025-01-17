namespace question1.Services;

using AutoMapper; 
using Interfaces;
using Contracts;
using Models;

public class ProductServices(IMapper mapper) : IProductServices
{ 
    private static readonly List<Product> products = [];

    public Task<Product?> CreateProduct(CreateProductRequest request)
    { 
        var product = mapper.Map<Product>(request);  
        
        var needleProduct = products.Find(p => p.Id == product.Id);
        if (needleProduct != null) return Task.FromResult<Product?>(null);
        
        products.Add(product); 
        return Task.FromResult<Product?>(product);
    }

    public Task<Product?> GetProductById(int id)
    {
        var todo = products.Find(p => p.Id == id); 
        return Task.FromResult(todo);
    }
}