using FullStackMark_IntegrationTest.Models;

namespace FullStackMark_IntegrationTest.Data;

public interface IPlayerRepository
{
    public Task<List<Player>> ListAll();
    public Task<Player> GetById(int id);
}
