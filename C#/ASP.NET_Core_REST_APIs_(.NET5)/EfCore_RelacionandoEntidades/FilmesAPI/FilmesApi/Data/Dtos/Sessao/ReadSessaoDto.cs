using FilmesAPI.Models;
using System;

namespace FilmesApi.Data.Dtos.Sessao
{
    public class ReadSessaoDto
    {
        public int Id { get; set; }
        public Filme filme { get; set; }
        public Cinema cinema { get; set; }
        public DateTime HorarioDeEncerramento { get; set; }
        public DateTime HorarioDeInicio { get; set; }
    }
}
