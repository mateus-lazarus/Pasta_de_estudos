using System.IO;

namespace Alura.ListaLeitura.App.Html
{
    public static class HtmlUtils
    {
        public static string CarregaArquivoHTML(string nomeArquivo)
        {
            var nomeCompletoDoArquivo = $"C:/Users/Pichau/Desktop/Aulas Alura/C#/Asp.Net Core/Alura.ListaLeitura/Alura.ListaLeitura.App/Html/{nomeArquivo}.html";
            using (var arquivo = File.OpenText(nomeCompletoDoArquivo))
            {
                return arquivo.ReadToEnd();
            }
        }
    }
}
