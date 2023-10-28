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
            Console.WriteLine("Executando projeto 8 - Condicionais 2");

            int idadeJoao = 17;
            int quantidadePessoas = 3;

            // O C# resolve essa comparação e guarda a variável booleana
            bool maiorDeIdade = idadeJoao >= 18;
            bool acompanhado = quantidadePessoas >= 2;

            // Para operadores lógicos usamos || e &&, por herança do C !

            if (maiorDeIdade || acompanhado)
            {
                Console.WriteLine("João pode entrar");
            }
            else
            {
                Console.WriteLine("João é menor de idade e está desacompanhado");
            }
            Console.ReadLine();
        }
    }
}
