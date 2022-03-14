using Alura.ListaLeitura.App.Html;
using Alura.ListaLeitura.App.Repositorio;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Routing;
using System;
using System.Linq;
using System.Threading.Tasks;

namespace Alura.ListaLeitura.App.Logica
{
    public class LivrosController : Controller
    {
        public IActionResult ParaLer()
        {
            var _repo = new LivroRepositorioCSV();
            //var html = new ViewResult { ViewName = "lista" };
            //return html;
            ViewBag.Livros = _repo.ParaLer.Livros;
            return View("lista");
        }

        public IActionResult Lendo()
        {
            var _repo = new LivroRepositorioCSV();
            //var html = new ViewResult { ViewName = "lista" };
            //return html;
            ViewBag.Livros = _repo.Lendo.Livros;
            return View("lista");
        }

        public IActionResult Lidos()
        {
            var _repo = new LivroRepositorioCSV();
            //var html = new ViewResult { ViewName = "lista" };
            //return html;
            ViewBag.Livros = _repo.Lidos.Livros;
            return View("lista");
        }

        //public static Task Detalhes(HttpContext context)
        //{
        //    int id = Convert.ToInt32(context.GetRouteValue("id"));
        //    var repo = new LivroRepositorioCSV();
        //    var livro = repo.Todos.First(l => l.Id == id);
        //    return context.Response.WriteAsync(livro.Detalhes());
        //}
        public string Detalhes(int id)
        {
            var repo = new LivroRepositorioCSV();
            var livro = repo.Todos.First(l => l.Id == id);
            return livro.Detalhes();
        }

        public string Teste()
        {
            return "Nova funcionalidade implementada";
        }


    }
}
