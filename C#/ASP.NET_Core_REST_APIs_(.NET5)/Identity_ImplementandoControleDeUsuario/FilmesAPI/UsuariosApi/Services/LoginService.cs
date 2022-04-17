using FluentResults;
using Microsoft.AspNetCore.Identity;
using System;
using System.Linq;
using UsuariosApi.Data.Request;
using UsuariosApi.Models;

namespace UsuariosApi.Services
{
    public class LoginService
    {
        private SignInManager<IdentityUser<int>> _signInManager;
        private TokenService _tokenService;

        public LoginService(SignInManager<IdentityUser<int>> signInManager, TokenService _tokenService)
        {
            _signInManager = signInManager;
            _tokenService = _tokenService;
        }

        public Result LogaUsuario(LoginRequest request)
        {
            var resultado = _signInManager
                .PasswordSignInAsync(
                    userName: request.Username,
                    password: request.Password,
                    isPersistent: false,            // Se o login deverá persistir
                    lockoutOnFailure: false         // Não entendi
                );
            if (resultado.Result.Succeeded)
            {
                // Recuperar IdentityUser para usar no CreateToken()
                IdentityUser<int> identityUser = _signInManager
                    .UserManager
                    .Users
                    .FirstOrDefault(usuario => usuario.NormalizedUserName == request.Username.ToUpper());

                // Criação do Token
                Token token = _tokenService.CreateToken(identityUser);

                // Retorna Sucesso com o Token
                return Result.Ok().WithSuccess(token.Value);
            }
            return Result.Fail("Login falhou");
        }
    }
}
