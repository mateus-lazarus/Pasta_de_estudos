using FullStackMark_IntegrationTest.Models;
using Microsoft.EntityFrameworkCore;

namespace FullStackMark_IntegrationTest.Data;

public class ApiDbContext : DbContext
{
    public ApiDbContext(DbContextOptions<ApiDbContext> options) : base(options)
    { }

    public DbSet<Player> Players { get; set; }
}
