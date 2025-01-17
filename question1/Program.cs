using question1.Interfaces;  
using question1.Services;

var builder = WebApplication.CreateBuilder(args);

// Add build in services to the container
builder.Services.AddControllers(); 
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen(); 
builder.Services.AddAutoMapper(AppDomain.CurrentDomain.GetAssemblies());

// Add custom services to the container.
builder.Services.AddScoped<IProductServices, ProductServices>();

var app = builder.Build();

// Add Swagger end points doc
app.UseSwagger();
app.UseSwaggerUI();

app.UseHttpsRedirection();

app.UseAuthorization();

app.MapControllers();

app.Run(); 