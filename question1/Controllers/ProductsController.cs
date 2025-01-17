namespace question1.Controllers;
 
using Interfaces;
using Contracts;
using Microsoft.AspNetCore.Mvc; 

[ApiController]
[Route("api/products")]
public class ProductsController(IProductServices productServices) : ControllerBase
{
    // Endpoint to add a new product
    [HttpPost]
    public async Task<IActionResult> CreateProduct(CreateProductRequest request)
    {
        var product = await productServices.CreateProduct(request); 
        
        return product != null ? Created() : BadRequest(); 
    }

    // Endpoint to retrieve a product by ID
    [HttpGet("{id:int}")]
    public async Task<ActionResult> GetProductById(int id)
    {
        var product = await productServices.GetProductById(id); 
        
        return product != null? Ok(product) : NotFound();  
    } 
}