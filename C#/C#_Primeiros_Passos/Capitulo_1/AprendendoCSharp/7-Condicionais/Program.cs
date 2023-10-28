using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _7_Condicionais
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando projeto 7 - Condicionais");

            int idadeJoao = 17;
            int quantidadePessoas = 3;

            if (idadeJoao >= 18)
            {
                Console.WriteLine("João é maior de idade");
            }
            else
            {
                Console.WriteLine("João é menor de idade");
                if (quantidadePessoas >= 2)
                {
                    Console.WriteLine("Mas por estar acompanhado, ele pode entrar");
                }
            }
            Console.ReadLine();
        }
    }
}
