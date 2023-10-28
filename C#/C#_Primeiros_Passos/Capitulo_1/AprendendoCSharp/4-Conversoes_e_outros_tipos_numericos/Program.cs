using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _4_Conversoes_e_outros_tipos_numericos
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando o projeto 4\n\n");

            double salario;
            salario = 1200.50;

            int salarioInteiro;
            // É necessário que esteja explícito para o compilador essa perda de "exatidão"
            // O operação de mudança de tipo de valor é chamada de CASTING
            salarioInteiro = (int)salario;


            // Valores máximos que um INT carrega
            // o INT suporta valores de -2^31 ou 2^31 e o -1. Portanto, valores acima de 2,000,000,000 (2 bilhões) ou maiores que 32BITS não são suportados

            // Para resolver esse problema lidaremos com o tipo LONG, que suporta um valor de até 64BITS na memória
            long idadeDoUniverso = 130000000000000000;
            Console.WriteLine("Escrevendo um número LONG LONGO MESMO" + "\n" + idadeDoUniverso);

            // Agora para numéros propositalmente menores podemos utilizar o tipo SHORT, que suporta até um número de 16BITS ou -32,768 <> 32,767
            short minha_idade = 18;

            // Para variáveis de PONTO FLUTUANTE é interessante de se pensar na precisão desejada, para tanto existem dois tipos DOUBLE e FLOAT.
            // Float possui uma precisão de até 7 números decimais, e é menos usual que o DOUBLE
            // Double possui uma precisão de até 15 número decimais e é o mais comum

            // Existe a necessidade de se AFIRMAR que o tipo será um FLOAT, portanto é necessário o uso de "f" ao final
            float sete_decimais = 7.1234567f;

            double quinze_decimais = 15.123456789012345;


            Console.WriteLine("\n\nFinalizando o projeto");
            Console.ReadLine();
        }
    }
}
