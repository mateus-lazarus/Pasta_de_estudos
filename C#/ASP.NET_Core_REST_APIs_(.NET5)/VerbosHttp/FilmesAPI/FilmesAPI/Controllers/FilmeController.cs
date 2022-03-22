using AutoMapper;
using FilmesAPI.Data;
using FilmesAPI.Data.Dtos;
using FilmesAPI.Models;
using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;
using System.Linq;

namespace FilmesAPI.Controllers
{
    [ApiController]             // Define utilidades para uma API
    [Route("[controller]")]     // Define como será lido a Uniform Resource Identifier (URI)
    public class FilmeController : ControllerBase
    {
        private FilmeContext _context;
        private IMapper _mapper;

        public FilmeController(FilmeContext context, IMapper mapper)
        {
            this._context = context;
            this._mapper = mapper;
        }

        [HttpPost]
        public IActionResult AdicionaFilme([FromBody] CreateFilmeDto filmeDto)
        {
            // Com Automapper
            Filme filme = this._mapper.Map<Filme>(filmeDto);

            this._context.Filmes.Add(filme);
            // Lembrando do princípio de Família e de Aprovação
            this._context.SaveChanges();
            // Padrão de resposta para a criação de uma entidade na arquitetura REST
            return CreatedAtAction(nameof(this.RecuperaFilmesPorId), new { Id = filme.Id }, filme);
        }

        [HttpGet]
        //public List<Filme> RecuperaFilmes()
        public IEnumerable<Filme> RecuperaFilmes()
        {
            //return filmes;
            return _context.Filmes;
        }

        [HttpGet("{id}")]
        public IActionResult RecuperaFilmesPorId(int id)
        {
            ////// Método Feio
            ////foreach (Filme filme in filmes)
            ////{
            ////    if (filme.Id == id)
            ////    {
            ////        return filme;
            ////    }
            ////}

            ////return null;


            //// Sintaxe C#
            //return filmes.FirstOrDefault(filme => filme.Id == id);


            // Retornar um IActionResult (código Http)
            Filme? filme = this._context.Filmes.FirstOrDefault(filme => filme.Id == id);
            if (filme != null)
            {
                ReadFilmeDto filmeDto = this._mapper.Map<ReadFilmeDto>(filme);
                return Ok(filmeDto);
            }

            return NotFound();
        }

        [HttpPut("{id}")]
        public IActionResult AtualizaFilme(int id, [FromBody] UpdateFilmeDto filmeDto)
        {
            Filme? filme = this._context.Filmes.FirstOrDefault(filme => filme.Id == id);
            if (filme != null)
            {
                // Diferente formação, pois há a intenção de lançar informações do $filmeDto para $filme
                _mapper.Map(filmeDto, filme);

                _context.SaveChanges();
                //// Prefiro retornar o endereço da informação atualizada, mas talvez esse não seja o padrão comercial
                //return CreatedAtAction(nameof(this.RecuperaFilmesPorId), new { Id = filme.Id }, filme);
                return NoContent();
            }

            return NotFound();
        }

        [HttpDelete("{id}")]
        public IActionResult DeletaFilme(int id)
        {
            Filme? filme = this._context.Filmes.FirstOrDefault(filme => filme.Id == id);
            if (filme != null)
            {
                this._context.Filmes.Remove(filme);
                this._context.SaveChanges();
                return NoContent();
            }

            return NotFound();
        }

    }
}
