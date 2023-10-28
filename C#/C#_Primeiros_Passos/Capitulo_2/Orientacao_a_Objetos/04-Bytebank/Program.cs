using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _04_Bytebank
{
    internal class Program
    {
        static void Main(string[] args)
        {
            ContaCorrente contaDoBruno = new ContaCorrente();
            contaDoBruno.titular = "Bruno";


            ContaCorrente contaDaGabriela = new ContaCorrente();
            contaDaGabriela.titular = "Gabriela";


            bool resultadoDaTransferencia = contaDoBruno.Transferir(85.40, contaDaGabriela);
            Console.WriteLine(resultadoDaTransferencia);
            Console.ReadLine();
        }
    }
}
