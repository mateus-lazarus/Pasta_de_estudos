using Microsoft.AspNetCore.Identity;
using Microsoft.IdentityModel.Tokens;
using System;
using System.IdentityModel.Tokens.Jwt;
using System.Security.Claims;
using System.Text;
using UsuariosApi.Models;

namespace UsuariosApi.Services
{
    public class TokenService
    {
        public Token CreateToken(IdentityUser<int> usuario)
        {
            Claim[] direitosUsuario = new Claim[]
            {
                new Claim("username", usuario.UserName),
                new Claim("id", usuario.Id.ToString())      // Espera-se receber uma string, por isso da conversão
            };

            // a chave para a criptografia do Token
            var chave = new SymmetricSecurityKey(
                Encoding.UTF8.GetBytes("chave0para0a0criptografia0dos0tokens")
                );

            var credenciais = new SigningCredentials(key: chave, algorithm: SecurityAlgorithms.HmacSha256);

            // Pronto para gerar o token
            var token = new JwtSecurityToken(
                claims: direitosUsuario,
                signingCredentials: credenciais,
                expires: DateTime.UtcNow.AddHours(1)
                );

            var tokenString = new JwtSecurityTokenHandler().WriteToken(token);

            return new Token(tokenString);
        }
    }
}
