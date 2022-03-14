using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _10_Calcula_poupanca
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Executando projeto 10 - calcula poupança");

            double valorInvestido = 1000;
            int valorMes = 0;

            while (valorMes <= 12)
            {
            valorMes++;
            valorInvestido = valorInvestido + valorInvestido * 0.0036;
            Console.WriteLine("Após " + valorMes + " mês você terá: R$" + valorInvestido);
            }

            Console.ReadLine();
        }
    }
}
