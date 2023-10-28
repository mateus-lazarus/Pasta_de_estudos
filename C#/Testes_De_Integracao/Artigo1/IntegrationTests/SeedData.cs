using FullStackMark_IntegrationTest.Data;
using FullStackMark_IntegrationTest.Models;

namespace IntegrationTests;

public static class SeedData
{
    public static void PopulateTestData(ApiDbContext dbContext)
    {
        dbContext.Players.Add(new Player("1", "Gretzky", "CallOfDuty"));
        dbContext.Players.Add(new Player("1", "Gretzky", "CallOfDuty"));
        dbContext.SaveChanges();
    }
}