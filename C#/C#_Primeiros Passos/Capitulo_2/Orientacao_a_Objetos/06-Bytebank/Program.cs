using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _06_Bytebank
{
    internal class Program
    {
        static void Main(string[] args)
        {
            ContaCorrente conta = new ContaCorrente();
            Cliente cliente = new Cliente();

            cliente.titularNome = "Gabriel da Costa Neto";
            cliente.titularCPF = "123.456.789-10";
            cliente.titularProfissao = "Desenvolvedor";


            conta.Saldo = -10;
            conta.Titular = cliente;

            Console.WriteLine(conta.Titular.titularNome);
            Console.WriteLine(conta.Saldo);

            Console.ReadLine();
        }
    }
}
