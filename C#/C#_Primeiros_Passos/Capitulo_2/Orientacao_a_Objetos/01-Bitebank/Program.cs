using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _01_Bitebank
{
    internal class Program
    {
        static void Main(string[] args)
        {
            ContaCorrente contaDaGabriela = new ContaCorrente();
            contaDaGabriela.titular = "Gabriela";
            contaDaGabriela.agencia = 863;
            contaDaGabriela.numero = 845632;
            contaDaGabriela.saldo = 1200.23;

            Console.ReadLine();
        }
    }
}
