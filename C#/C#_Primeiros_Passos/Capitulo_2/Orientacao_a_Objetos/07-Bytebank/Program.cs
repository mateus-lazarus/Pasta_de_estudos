using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _07_Bytebank
{
    internal class Program
    {
        static void Main(string[] args)
        {
            ContaCorrente conta = new ContaCorrente(876, 86712540);
            
            // Tentativa de manipulação externa
            conta.Agencia = -10;


            Console.WriteLine(conta.Agencia);
            Console.WriteLine(conta.Numero);
            Console.WriteLine(ContaCorrente.TotalDeContasCriadas);

            ContaCorrente contaDois = new ContaCorrente(845, 86718740);
            Console.WriteLine(ContaCorrente.TotalDeContasCriadas);

            Console.ReadLine();
        }
    }
}
