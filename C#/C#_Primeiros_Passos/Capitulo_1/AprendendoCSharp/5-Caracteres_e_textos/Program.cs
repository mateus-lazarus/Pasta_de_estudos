using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _5_Caracteres_e_textos
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando projeto 5");

            // Character
            char primeiraLetra = 'a';
            // Lembrando que "" é diferente de '', pois a segunda trata-se de uma string literal

            // O char é uma variável armazenada de 16bits no código
            primeiraLetra = (char)65;
            Console.WriteLine("(char) 65 => " + primeiraLetra);

            // Brincando com a representação em Character de números
            primeiraLetra = (char)(primeiraLetra + 1);
            Console.WriteLine("(char) 66 => " + primeiraLetra);
            // ^^ Todas essas representações númericas existem de acordo com a ASCII TABLE ^^



            string titulo = "Alura Cursos de Tecnologia" + 2020;

            // A quebra de texto somente é vista VISUALMENTE, mas não para o código
            //      O uso do @ permite que o código VEJA a quebra de linhas no texto
            string cursos_de_programacao = @"Cursos 
                +  - Java
                +  - C#
                +  - Python";

            Console.WriteLine(cursos_de_programacao);

            Console.WriteLine("Finalizando execução. Cya.");
            Console.ReadLine();
        }
    }
}
