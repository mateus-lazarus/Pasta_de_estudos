using System.ComponentModel.DataAnnotations;

namespace FullStackMark_IntegrationTest.Models;

public class Player
{
    [Key]
    [StringLength(2, MinimumLength = 1, ErrorMessage = "The Id field should have at least 1 character")]
    public string Id { get; set; }

    [Required(ErrorMessage = "The Identifier field is required")]
    public string Identifier { get; set; }

    [Required(ErrorMessage = "The Game field is required")]
    public string Game { get; set; }

    public Player(string id, string identifier, string game)
    {
        Id = id;
        Identifier = identifier;
        Game = game;
    }
}
