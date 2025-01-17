namespace question1.Contracts;

using System.ComponentModel.DataAnnotations;

public class CreateProductRequest
{
    [Required] 
    public int Id { get; set; }
    
    [Required] 
    public string Name { get; set; }
    
    [Required] 
    [DataType(DataType.Currency)]
    public decimal Price { get; set; } 
}