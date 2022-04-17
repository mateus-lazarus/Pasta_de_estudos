using MailKit.Net.Smtp;
using Microsoft.Extensions.Configuration;
using MimeKit;
using System;
using UsuariosApi.Models;

namespace UsuariosApi.Services
{
    public class EmailService
    {
        private IConfiguration _configuration;

        public EmailService(IConfiguration configuration)
        {
            _configuration = configuration;
        }

        public void EnviarEmail(
            string[] destinatario,
            string assunto,
            int usuarioId,
            string code
        )
        {
            Mensagem mensagem = new Mensagem(
                destinatario: destinatario,
                assunto: assunto,
                usuarioId: usuarioId,
                codigo: code
            );

            var mensagemDeEmail = this.CriarCorpoEmail(mensagem);

            Enviar(mensagemDeEmail);
        }

        private void Enviar(MimeMessage mensagemDeEmail)
        {
            using (var client = new SmtpClient())
            {
                try
                {
                    // Recebe o IConfiguration para acessar o "EmailSettings" do AppSettings.json
                    client.Connect(_configuration.GetValue<string>("EmailSettings:SmtpServer"),
                        _configuration.GetValue<int>("EmailSettings:Port"), useSsl: true);

                    // Remover mecanismo mais complexo de autenticação, pois não é o foco
                    client.AuthenticationMechanisms.Remove("XOUATH2");

                    // Autentica a conta gmail (basicamente loga)
                    client.Authenticate(_configuration.GetValue<string>("EmailSettings:From"),
                        _configuration.GetValue<string>("EmailSettings:Password"));

                    // Todo AUTH de Email
                    client.Send(mensagemDeEmail);
                }
                catch
                {
                    throw;
                }
                finally
                {
                    client.Disconnect(true);
                    client.Dispose();           // Libera os recursos do client
                }
            };
        }

        private MimeMessage CriarCorpoEmail(Mensagem mensagem)
        {
            var mensagemDeEmail = new MimeMessage();
            mensagemDeEmail.From.Add(new MailboxAddress(
                name: _configuration.GetValue<string>("EmailSettings:From"),
                address: _configuration.GetValue<string>("EmailSettings:From"))
            );
            mensagemDeEmail.To.AddRange(mensagem.Destinatario);
            mensagemDeEmail.Subject = mensagem.Assunto;
            mensagemDeEmail.Body = new TextPart(MimeKit.Text.TextFormat.Text)
            {
                Text = mensagem.Conteudo
            };

            return mensagemDeEmail;
        }
    }
}
