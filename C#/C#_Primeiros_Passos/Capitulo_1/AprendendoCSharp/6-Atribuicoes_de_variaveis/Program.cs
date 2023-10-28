using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _6_Atribuicoes_de_variaveis
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando o projeto 6");

            int idade = 32;
            int idadeGustavo = idade;

            Console.WriteLine(idadeGustavo);

            idade = 20;

            Console.WriteLine("Após definir o valor da idade para 20, verifica-se se a idade do Gustavo foi passada por Valor ou por Referência");
            Console.WriteLine(idade + ", " + idadeGustavo);

            Console.ReadLine();
        }
    }
}
