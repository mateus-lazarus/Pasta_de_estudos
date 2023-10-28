using System;


namespace _06_Bytebank
{
    public class ContaCorrente
    {
        // // 01 - Forma extensa de se definir Getters e Setters, serve para quando se deseja aplicar métodos
        // private Cliente _titular;
        // public Cliente Titular
        // {
        //     get
        //     {
        //         return _titular;
        //     }
        //     set
        //     {
        //         this._titular = value;
        //     }
        // }
        // 02 - Forma simplificada do que foi exposto acima
        public Cliente Titular { get; set; }

        // // Antes
        // public int agencia;
        // public int numero;
        // Depois
        public int Agencia { get; set; }
        public int Numero { get; set; }


        // É uma convenção que esse campo interno seja iniciado por um underline
        private double _saldo = 100;

        // É uma convenção de propriedades que quando se abra GET, SET tenha a primeira letra em maiúsculo
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
