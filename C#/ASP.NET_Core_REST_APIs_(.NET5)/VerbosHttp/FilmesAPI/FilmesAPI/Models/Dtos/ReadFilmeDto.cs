using System.ComponentModel.DataAnnotations;

namespace FilmesAPI.Data.Dtos
{
    public class ReadFilmeDto
    {
        [Key]
        [Required]
        public int Id { get; set; }

        [Required(ErrorMessage = "O campo Título é obrigatório.")]
        public string Titulo { get; set; }

        [Required(ErrorMessage = "O campo Diretor é obrigatório.")]
        public string Diretor { get; set; }

        // Duas formas distantas de se utilizar a validação a fim de demonstrar possibilidades

        // Modelo 1
        [Required(ErrorMessage = "O campo Gênero é obrigatório.")]
        [StringLength(30, ErrorMessage = "O Gênero não pode passar de 30 caracteres.")]
        public string Genero { get; set; }

        // Modelo 2
        [
            Required(ErrorMessage = "O campo Duração é obrigatório."),
            Range(1, 600, ErrorMessage = "A duração deve estar entre 1 minuto e 10 horas")
        ]
        public int Duracao { get; set; }

        public System.DateTime HoraDaConsulta { get; set; }
    }
}
