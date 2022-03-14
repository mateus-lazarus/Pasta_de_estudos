using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Routing;
using System;
using System.Linq;
using System.Threading.Tasks;

namespace Alura.ListaLeitura.App.Mvc
{
    public class RoteamentoPadrao
    {
        public static Task TratamentoPadrao(HttpContext context)
        {
            //rota padrão: /<classe>Logica/Metodo
            //rota template: {DNS}/{classe}/{metodo}

            string classe = Convert.ToString(context.GetRouteValue("classe"));
            string nomeMetodo = Convert.ToString(context.GetRouteValue("metodo"));

            string nomeCompleto = $"Alura.ListaLeitura.App.Logica.{classe}Logica";


            var tipo = Type.GetType(nomeCompleto);
            var metodo = tipo.GetMethods().Where(m => m.Name == nomeMetodo).First();
            var requestDelegate = (RequestDelegate)Delegate.CreateDelegate(type: typeof(RequestDelegate), method: metodo);

            return requestDelegate.Invoke(context);
        }
    }


}
