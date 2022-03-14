using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Bytebank.Funcionarios;

namespace Bytebank
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Funcionario carlos = new Funcionario();

            carlos.Nome = "Carlos";
            carlos.CPF = "123.456.789-10";
            carlos.Salario = 2000;

            Console.WriteLine(carlos.GetBonificacao());

            Console.ReadLine();
        }
    }
}
