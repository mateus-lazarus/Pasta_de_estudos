using FilmesAPI.Models;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Text.Json.Serialization;
using System.Threading.Tasks;

namespace FilmesApi.Models
{
    public class Endereco
    {
        [Key]
        [Required]
        public int Id { get; set; }

        public string Logradouro { get; set; }

        public string Bairro { get; set; }

        public int Numero { get; set; }

        // Diz ao ORM que a Entidade Endereco pode possuir alguma referência a um Cinema (a relação one-to-one)
        [JsonIgnore]
        public virtual Cinema Cinema { get; set; }
    }
}
