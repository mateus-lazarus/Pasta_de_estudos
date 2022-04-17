using Microsoft.AspNetCore.Authorization;
using System;
using System.Security.Claims;
using System.Threading.Tasks;

namespace FilmesApi.Authorization
{
    public class IdadeMinimaHandler : AuthorizationHandler<IdadeMinimaRequirement>
    {
        protected override Task HandleRequirementAsync(AuthorizationHandlerContext context,
            IdadeMinimaRequirement requirement)
        {
            if (!context.User.HasClaim(claim => claim.Type == ClaimTypes.DateOfBirth))
            {
                return Task.CompletedTask;
            }

            // Calcular data de nascimento
            DateTime dataNascimento = Convert.ToDateTime(context.User.FindFirst(claim =>
                claim.Type == ClaimTypes.DateOfBirth
            ).Value);

            // Calcular idade
            int idadeObtida = DateTime.Now.Year - dataNascimento.Year;

            // Se a pessoa ainda não fez aniversário esse ano
            if (dataNascimento > DateTime.Today.AddYears(-idadeObtida))
            {
                idadeObtida--;
            }

            // Conclusões
            if (idadeObtida >= requirement.IdadeMinima)
            {
                context.Succeed(requirement);
            }

            return Task.CompletedTask;
        }
    }
}
