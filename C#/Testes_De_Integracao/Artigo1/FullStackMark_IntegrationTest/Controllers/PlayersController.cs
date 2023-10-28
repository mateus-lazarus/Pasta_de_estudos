using FullStackMark_IntegrationTest.Data;
using FullStackMark_IntegrationTest.Models;
using Microsoft.AspNetCore.Mvc;

namespace FullStackMark_IntegrationTest.Controllers;

[Route("api/[controller]")]
[ApiController]
public class PlayersController : ControllerBase
{
    private readonly IPlayerRepository _playerRepository;

    public PlayersController(IPlayerRepository playerRepository)
    {
        _playerRepository = playerRepository;
    }

    // GET api/players
    [HttpGet]
    public async Task<ActionResult<List<Player>>> Get()
    {
        return await _playerRepository.ListAll();
    }

    // GET api/players/5
    [HttpGet("{id}")]
    public async Task<ActionResult<Player>> Get(int id)
    {
        return await _playerRepository.GetById(id);
    }
}
