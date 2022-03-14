using System;


namespace _07_Bytebank
{
    public class ContaCorrente
    {
        
        public Cliente Titular { get; set; }

        // Contador de objetos criados
        public static int TotalDeContasCriadas { get; private set; }    // É possível utilizar da palavra-chave "private" para manipular quem pode interagir

        private int _agencia;
        public int Agencia {
            get
            {
                return _agencia;
            }
            set
            {
                if ( value <= 0)
                {
                    return;
                }
                this._agencia = value;
            }
        }
        public int Numero { get; set; }


        private double _saldo = 100;

        public double Saldo
        {
            get
            {
                return this._saldo;
            }
            set
            {
                if (value < 0)
                {
                    return;
                }

                this._saldo = value;
            }
        }



        public ContaCorrente(int agencia, int numero)
        {
            this.Agencia = agencia;
            this.Numero = numero;

            // Para acessar membros estáticos, deve-se usar a classe e não THIS (a referência ao objeto)
            ContaCorrente.TotalDeContasCriadas++;
        }


        public bool Sacar(double valor)
        {
            if (this._saldo < valor)
            {
                return false;
            }

            this._saldo -= valor;
            return true;
        }

        public void Depositar(double valor)
        {
            if (valor < 0)
            {
                return;
            }

            this._saldo += valor;
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
