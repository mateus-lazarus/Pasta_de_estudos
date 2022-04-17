using Microsoft.AspNetCore.Identity;
using System;

namespace UsuariosApi.Models
{
    public class CustomIdentityUser : IdentityUser<int>
    {
        // Dessa forma é extendido o Usuário padrão do Identity
        public DateTime DataDeNascimento { get; set; }
    }
}
