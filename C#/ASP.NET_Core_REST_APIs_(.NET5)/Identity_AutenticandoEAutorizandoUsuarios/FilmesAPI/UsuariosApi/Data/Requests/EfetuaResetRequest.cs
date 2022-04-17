using System.ComponentModel.DataAnnotations;

namespace UsuariosApi.Data.Requests
{
    public class EfetuaResetRequest
    {
        [Required, DataType(DataType.Password)]
        public string Password { get; set; }

        [Required, DataType(DataType.Password)]
        [Compare("Password", ErrorMessage = "As senhas não coincidem")]
        public string RePassword { get; set; }

        [Required]
        public string Email { get; set; }

        [Required]
        public string Token { get; set; }
    }
}
