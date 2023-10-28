using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _05_Bytebank
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Cliente gabriela = new Cliente();
            gabriela.titularNome = "Gabriela";
            gabriela.titularProfissao = "Desenvolvedora C#";
            gabriela.titularCPF = "123.456.789-10";

            ContaCorrente conta = new ContaCorrente();
            conta.titular = gabriela;



            Console.ReadLine();
        }
    }
}
