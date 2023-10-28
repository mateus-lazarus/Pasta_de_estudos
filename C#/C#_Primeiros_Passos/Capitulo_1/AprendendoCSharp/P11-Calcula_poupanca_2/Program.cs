using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P11_Calcula_poupanca_2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando projeto 10 - calcula poupança");

            double valorInvestido = 1000;
            int valorMes = 0;

            for (valorMes = 1; valorMes <= 12; valorMes++)
            {
                // Nova forma de se trabalhar com valores já dentro da variável: o MULTIPERCENTUAL " *= "
                valorInvestido *= 1.0036;
                Console.WriteLine("Após " + valorMes + " mês você terá: R$" + valorInvestido);
            }

            Console.ReadLine();
        }
    }
}
