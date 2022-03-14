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
            Console.WriteLine("Executando projeto 9 - Escopo");

            int idadeJoao = 17;
            int quantidadePessoas = 3;
            string mensagemAdicional = "João não está acompanhado";

            bool maiorDeIdade = idadeJoao >= 18;
            bool acompanhado = quantidadePessoas >= 2;


            if (acompanhado == true)
            {
                mensagemAdicional = "João está acompanhado";
                // O escopo de funções e loops é fechado, portanto ao adicionar uma variável aqui dentro, ela somente existirá aqui dentro
                double saldoDoJoao = 1230.26;
            }


            if (maiorDeIdade || acompanhado)
            {
                Console.WriteLine("João pode entrar");
                Console.WriteLine(mensagemAdicional);

                // Não será encontrado saldoDoJoao dentro desse contexto
                // Console.WriteLine(saldoDoJoao);
            }
            // Para toda condicional com somente UMA LINHA DE INSTRUÇÃO é possível não fechar com chaves, mas é feio.
            else
                Console.WriteLine("João é menor de idade e está desacompanhado");


            Console.ReadLine();
        }
    }
}
