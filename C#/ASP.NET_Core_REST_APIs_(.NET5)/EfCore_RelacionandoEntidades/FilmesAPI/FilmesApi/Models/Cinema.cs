using FilmesApi.Models;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Text.Json.Serialization;

namespace FilmesAPI.Models
{
    public class Cinema
    {
        [Key]
        [Required]
        public int Id { get; set; }
        [Required(ErrorMessage = "O campo de nome é obrigatório")]
        
        public string Nome { get; set; }

        // Define a classe da Foreign Key, ou seja, diz para o ORM que "Essa classe possui uma dependência num Endereço"
        [JsonIgnore]
        public virtual Endereco Endereco { get; set; }
        // Define o campo da Foreign Key
        public int EnderecoId { get; set; }

        public virtual Gerente Gerente { get; set; }
        public int GerenteId { get; set; }
    }
}