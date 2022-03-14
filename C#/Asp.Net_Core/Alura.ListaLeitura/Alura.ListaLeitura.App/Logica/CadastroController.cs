//using System.Collections.Generic;
using System.Threading.Tasks;
using Alura.ListaLeitura.App.Negocio;
using Alura.ListaLeitura.App.Repositorio;
using Microsoft.AspNetCore.Http;
//using System.Linq;
//using Microsoft.AspNetCore.Routing;
using Alura.ListaLeitura.App.Html;
using Microsoft.AspNetCore.Mvc;

namespace Alura.ListaLeitura.App.Logica
{
    public class CadastroController
    {
        //public static Task Incluir(HttpContext context)
        //{
        //    var livro = new Livro()
        //    {
        //        //// Para o método GET
        //        //Titulo = context.Request.Query["titulo"].First(),   // Modo diferentes
        //        //Autor = context.Request.Query["autor"].First()           // de fazer o mesmo
        //        // Para o método POST
        //        Titulo = context.Request.Form["titulo"].First(),   // Modo diferentes
        //        Autor = context.Request.Form["autor"].First()           // de fazer o mesmo
        //    };
        //    var repo = new LivroRepositorioCSV();
        //    repo.Incluir(livro);

        //    return context.Response.WriteAsync("O livro foi adicionado com sucesso! Obrigado!");
        //}
        public string Incluir(Livro livro)
        {
            var repo = new LivroRepositorioCSV();
            repo.Incluir(livro);

            return "O livro foi adicionado com sucesso! Obrigado!";
        }

        //public static Task ExibeFormulario(HttpContext context)
        //{
        //    var html = HtmlUtils.CarregaArquivoHTML("formulario");
        //    return context.Response.WriteAsync(html);
        //}
        public IActionResult ExibeFormulario()
        {
            var html = new ViewResult { ViewName = "formulario" };
            return html;
        }

        //Método deletado devido à duplicidade com o Incluir()
        ////public static Task NovoLivro(HttpContext context)
        ////{
        ////    var livro = new Livro()
        ////    {
        ////        Titulo = Convert.ToString(context.GetRouteValue("nome")),   // Modo diferentes
        ////        Autor = context.GetRouteValue("autor").ToString()           // de fazer o mesmo
        ////    };
        ////    var repo = new LivroRepositorioCSV();
        ////    repo.Incluir(livro);

        ////    return context.Response.WriteAsync("O livro foi adicionado com sucesso! Obrigado!");
        ////}


    }
}
