using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _3_Variaveis_ponto_flutuante
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando 3-Criando Variáveis Ponto Flutuante");

            double salario;
            salario = 1200.50;

            Console.WriteLine("Ao ser exibido o valor, ao invés de um \".\" será exibido uma \",\" e os demais à direita zeros serão escondidos");
            Console.WriteLine(salario);
            Console.WriteLine("\n\n")

            Console.WriteLine("Da mesma forma, ao avaliar expressões matemáticas serão considerados a tipagem da variáveis envolvidas");
            Console.WriteLine("Desta forma, a expressão: \" 15 / 2 \" será tratada como inteiro / inteiro => resultado INTEIRO");
            Console.Write("15 / 2 => ");
            Console.WriteLine(15 / 2);
            Console.WriteLine("\n\n")

            Console.WriteLine("Para consertar tal problema é necessário que um dos valores na operação matemática seja um DOUBLE ou um PONTO FLUTUANTE");
            Console.Write("1200.50 / 2 => ");
            Console.WriteLine(1200.50 / 2);
            Console.WriteLine("\n\n")


            Console.WriteLine("Finalizando a execução do programa. Cya.");
            Console.ReadLine();
        }
    }
}
