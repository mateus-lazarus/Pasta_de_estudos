namespace _05_Bytebank
{
    public class ContaCorrente
    {
        public _05_Bytebank.Cliente titular;
        public int agencia;
        public int numero;
        public double saldo = 100;

        public bool Sacar(double valor)
        {
            if (this.saldo < valor)
            {
                Console.WriteLine();
                return false;
            }

            this.saldo -= valor;
            return true;
        }

        public void Depositar(double valor)
        {
            if (valor < 0)
            {
                return;
            }

            this.saldo += valor;
            return;
        }

        public bool Transferir(double valor, ContaCorrente contaDestino)
        {
            bool resultadoSaque = this.Sacar(valor);
            if (!resultadoSaque)
            {
                return false;
            }

            contaDestino.Depositar(valor);
            return true;
        }
    }
}
