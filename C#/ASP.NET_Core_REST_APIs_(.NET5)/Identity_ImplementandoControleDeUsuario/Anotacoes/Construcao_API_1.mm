<map version="1.0.1">
<!-- To view this file, download free mind mapping software FreeMind from http://freemind.sourceforge.net -->
<node CREATED="1648246508109" ID="ID_973387076" MODIFIED="1648246534510" TEXT="Constru&#xe7;&#xe3;o API Rest 1">
<node CREATED="1648943538397" HGAP="51" ID="ID_472188317" MODIFIED="1649003727713" POSITION="right" TEXT="Pacotes" VSHIFT="-160">
<node CREATED="1648943813713" HGAP="66" ID="ID_1780370749" MODIFIED="1649005970000" TEXT="FluentResutls" VSHIFT="-80">
<node CREATED="1648943822408" HGAP="24" ID="ID_1055252603" MODIFIED="1648943830189" TEXT="Problema" VSHIFT="-33">
<node CREATED="1648943831537" HGAP="37" ID="ID_446381362" MODIFIED="1648943901294" VSHIFT="-22">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Para Atualiza&#231;&#227;o e Dele&#231;&#227;o de Entidades (Http Put e Delete)
    </p>
    <p>
      &#160;fun&#231;&#227;o retornar um resultado mais sem&#226;ntico
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1648943975788" HGAP="32" ID="ID_1172098359" MODIFIED="1648943979445" VSHIFT="-6">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6930482603913276031.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1648943823969" HGAP="22" ID="ID_932001640" MODIFIED="1648943828126" TEXT="Solu&#xe7;&#xe3;o" VSHIFT="28">
<node CREATED="1648943998281" HGAP="37" ID="ID_1586836129" MODIFIED="1648944019855" TEXT="Permite a utiliza&#xe7;&#xe3;o de resultados personalizados e com maior sem&#xe2;ntica, facilitando a leitura e compreens&#xe3;o do c&#xf3;digo" VSHIFT="-26"/>
</node>
</node>
<node CREATED="1649005970964" HGAP="84" ID="ID_402755413" MODIFIED="1649005979549" TEXT="Identity" VSHIFT="77">
<node CREATED="1649006207979" HGAP="59" ID="ID_338665808" MODIFIED="1649675789653" TEXT="DbContext.cs" VSHIFT="-27">
<node CREATED="1649006368075" HGAP="52" ID="ID_591290891" MODIFIED="1649006752014" TEXT="DbContext&lt;" VSHIFT="-23">
<node CREATED="1649006387340" HGAP="49" ID="ID_1978611529" MODIFIED="1649675790585" TEXT="IdentityUser&lt;int&gt;" VSHIFT="-23">
<node CREATED="1649006404075" HGAP="44" ID="ID_1389329188" MODIFIED="1649006423397" TEXT="O formato da identifica&#xe7;&#xe3;o do usu&#xe1;rio pelo Identity" VSHIFT="-16"/>
</node>
<node CREATED="1649006426972" HGAP="52" ID="ID_1363896937" MODIFIED="1649675790586" TEXT="IdentityRole&lt;int&gt;">
<node CREATED="1649006587467" HGAP="45" ID="ID_1084846416" MODIFIED="1649006600515" TEXT="N&#xe3;o entendo o que significa, mas precisa de um formato" VSHIFT="-7"/>
</node>
<node CREATED="1649006627691" HGAP="57" ID="ID_973465208" MODIFIED="1649675790588" TEXT="int" VSHIFT="28">
<node CREATED="1649006634507" HGAP="48" ID="ID_338341539" MODIFIED="1649006650722" TEXT="Formato da chave no DB" VSHIFT="-6"/>
</node>
<node CREATED="1649006672621" HGAP="48" ID="ID_739573960" MODIFIED="1649006676181" VSHIFT="9">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8850727187187295522.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1649006762955" HGAP="56" ID="ID_802402751" MODIFIED="1649006768425" TEXT="Ctor" VSHIFT="-1">
<node CREATED="1649006779685" HGAP="45" ID="ID_964293622" MODIFIED="1649006781755" VSHIFT="2">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8909320237439707107.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649006786139" HGAP="60" ID="ID_1147690610" MODIFIED="1649675789686" TEXT="Startup.cs" VSHIFT="38">
<node CREATED="1649006911771" HGAP="42" ID="ID_1012367874" MODIFIED="1649006918099" TEXT="ConfigureServices()" VSHIFT="12">
<node CREATED="1649006921459" HGAP="33" ID="ID_480625090" MODIFIED="1649675790589" TEXT="services.AddDbContext&lt;" VSHIFT="14">
<node CREATED="1649007032571" HGAP="44" ID="ID_634031210" MODIFIED="1649676534693" TEXT="UserDbContext()" VSHIFT="7">
<node CREATED="1649007061643" HGAP="37" ID="ID_150685945" MODIFIED="1649007145010" VSHIFT="8">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      options = options.UseMySQL( <i>Configuration.GetConnectionString(&quot;UsuarioConnection&quot;) </i>)
    </p>
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649007185315" HGAP="37" ID="ID_562744510" MODIFIED="1649675790590" TEXT="services.AddIdentity&lt;IdentityUser&lt;int&gt;, IdentityRole&lt;int&gt;&gt;()" VSHIFT="28">
<node CREATED="1649007205403" HGAP="35" ID="ID_1345294475" MODIFIED="1649007345055" TEXT=".AddEntityFrameworkStores&lt;UserDbContext&gt;();" VSHIFT="17"/>
</node>
</node>
</node>
<node CREATED="1649056084079" HGAP="55" ID="ID_470903824" MODIFIED="1649102128097" TEXT="Cadastro de Senhas" VSHIFT="36">
<node CREATED="1649056093399" HGAP="49" ID="ID_158946996" MODIFIED="1649056099146" TEXT="Padr&#xe3;o" VSHIFT="-19">
<node CREATED="1649056099871" HGAP="55" ID="ID_1006557730" MODIFIED="1649056175500" VSHIFT="-46">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      O Identity por padr&#227;o requere das senhas:
    </p>
    <p>
      &gt; caractere mai&#250;sculo
    </p>
    <p>
      &gt; n&#250;mero
    </p>
    <p>
      &gt; caractere especial
    </p>
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1649102128115" HGAP="52" ID="ID_475570360" MODIFIED="1649102135868" TEXT="Configura&#xe7;&#xf5;es de Senha" VSHIFT="44">
<node CREATED="1649631783411" HGAP="47" ID="ID_1441819920" MODIFIED="1649675790592" TEXT="Startup.cs" VSHIFT="27">
<node CREATED="1649631790927" HGAP="46" ID="ID_449367338" MODIFIED="1649676534696" TEXT="ConfigureServices()" VSHIFT="21">
<node CREATED="1649631830295" HGAP="34" ID="ID_1275947571" MODIFIED="1649632008176" VSHIFT="5">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      <font color="#ff9900">services</font>.<font color="#00cc00">Configure</font>&lt;<font color="#00cccc">IdentityOptions</font>&gt;(<font color="#ff9900">options</font>&#160;=&gt;
    </p>
    <p>
      {
    </p>
    <p>
      &#160;&#160;&#160; <font color="#ff9900">options</font>.<font color="#00cc33">Password</font>.<font color="#00cc00">RequireNonAlphanumeric</font>&#160; = false;
    </p>
    <p>
      &#160;&#160;&#160; <font color="#ff9900">options</font>.<font color="#00cc33">Password</font>.<font color="#00cc00">RequireUppercase</font>&#160;= false;
    </p>
    <p>
      &#160;&#160;&#160; <font color="#ff9900">options</font>.<font color="#00cc33">Password</font>.<font color="#00cc00">RequiredLength</font>&#160;= 8;
    </p>
    <p>
      });
    </p>
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649632103679" ID="ID_682271543" MODIFIED="1649675790594" TEXT="Documenta&#xe7;&#xe3;o">
<node CREATED="1649632106935" HGAP="30" ID="ID_1582818120" LINK="https://docs.microsoft.com/pt-br/aspnet/core/security/authentication/identity-configuration?view=aspnetcore-5.0#password" MODIFIED="1649632110926" TEXT="https://docs.microsoft.com/pt-br/aspnet/core/security/authentication/identity-configuration?view=aspnetcore-5.0#password" VSHIFT="27"/>
</node>
</node>
</node>
<node CREATED="1649635799090" HGAP="60" ID="ID_1923657008" MODIFIED="1649636034159" TEXT="Persist&#xea;ncia de Login" VSHIFT="76">
<node CREATED="1649635811218" HGAP="65" ID="ID_1570696143" MODIFIED="1649635819444" TEXT="Cria&#xe7;&#xe3;o de um Token" VSHIFT="-21">
<node CREATED="1649636093009" HGAP="40" ID="ID_1499282556" MODIFIED="1649675790595" TEXT="Pacotes Necess&#xe1;rios" VSHIFT="-8">
<node CREATED="1649636170961" HGAP="39" ID="ID_1199176923" MODIFIED="1649636185778" TEXT="System.IdentityModel.Tokens.Jwt" VSHIFT="-12"/>
</node>
<node CREATED="1649636020658" HGAP="59" ID="ID_1091988955" MODIFIED="1649675790598" TEXT="TokenService" VSHIFT="2">
<node CREATED="1649636080946" HGAP="62" ID="ID_1602943336" MODIFIED="1649676534698" TEXT="CreateToken()" VSHIFT="-25">
<node CREATED="1649637836223" ID="ID_1346955798" MODIFIED="1649637839988" TEXT="chave"/>
<node CREATED="1649637840399" ID="ID_518270103" MODIFIED="1649637842403" TEXT="credenciais"/>
<node CREATED="1649637844951" ID="ID_50578867" MODIFIED="1649637853956" TEXT="token gerado"/>
</node>
<node CREATED="1649637858727" HGAP="65" ID="ID_569804988" LINK="https:/jwt.io" MODIFIED="1649676534714" TEXT="&#xc9; poss&#xed;vel verificar as informa&#xe7;&#xf5;es no Token por meio do site do pacote" VSHIFT="40">
<node CREATED="1649637926556" MODIFIED="1649637926556">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_1023109862696804729.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1649672695473" HGAP="59" ID="ID_1533763428" MODIFIED="1649675801098" TEXT="Confirma&#xe7;&#xe3;o de Email" VSHIFT="65">
<node CREATED="1649675603276" HGAP="65" ID="ID_95043946" MODIFIED="1649675807081" TEXT="O pr&#xf3;prio Identity j&#xe1; traz uma solu&#xe7;&#xe3;o" VSHIFT="-27">
<node CREATED="1649676051108" HGAP="120" ID="ID_1173996470" MODIFIED="1649676063338" TEXT="Ativar Necessidade de Confirma&#xe7;&#xe3;o de Email" VSHIFT="-99">
<node CREATED="1649675779075" HGAP="100" ID="ID_88773135" MODIFIED="1649675804802" TEXT="Startup.cs" VSHIFT="-39">
<node CREATED="1649675793775" MODIFIED="1649675793775">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_76626209844506630.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649676066683" HGAP="110" ID="ID_1338913453" MODIFIED="1649676076643" TEXT="Criar c&#xf3;digo de ativa&#xe7;&#xe3;o para o email" VSHIFT="-131">
<node CREATED="1649676393827" HGAP="54" ID="ID_1994669781" MODIFIED="1649676401652" TEXT="CadastroService.cs" VSHIFT="-22">
<node CREATED="1649676524411" ID="ID_1007868128" MODIFIED="1649676534777">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6600684937868674364.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1649676378574" HGAP="48" ID="ID_282267876" MODIFIED="1649676404412">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_1217309825760039098.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649676461098" HGAP="42" ID="ID_1846477038" MODIFIED="1649676570089" TEXT="CadastroController.cs" VSHIFT="4">
<node CREATED="1649676485452" ID="ID_1423355004" MODIFIED="1649676534791">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6430576823988684101.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1649676467268" ID="ID_906638641" MODIFIED="1649676467268">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4961864472635604741.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649676570946" HGAP="45" ID="ID_1021807993" MODIFIED="1649676577297" TEXT="Startup.cs" VSHIFT="73">
<node CREATED="1649676604330" HGAP="67" ID="ID_1938321974" MODIFIED="1649676685983" TEXT="ConfigureServices()" VSHIFT="-20">
<node CREATED="1649676676100" HGAP="39" ID="ID_781788469" MODIFIED="1649676679790">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6614818839352732776.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1649677174297" HGAP="92" ID="ID_1017128497" MODIFIED="1649728172141" TEXT="Confirmando Cadastro" VSHIFT="-7">
<node CREATED="1649677196129" HGAP="87" ID="ID_780799670" MODIFIED="1649677202360" TEXT="CadastroController.cs" VSHIFT="-38">
<node CREATED="1649678239427" MODIFIED="1649678239427">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4998300265449571749.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1649678173904" HGAP="87" ID="ID_1835580402" MODIFIED="1649678181473" TEXT="CadastroService.cs" VSHIFT="-19">
<node CREATED="1649678215808" MODIFIED="1649678215808">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5273757350099627350.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649728182616" HGAP="126" ID="ID_552864614" MODIFIED="1649728191503" TEXT="Disparar Email com Confirma&#xe7;&#xe3;o" VSHIFT="93">
<node CREATED="1649934258313" HGAP="111" ID="ID_223263464" MODIFIED="1649934269724" TEXT="Criar Servi&#xe7;o de Envio" VSHIFT="-44"/>
<node CREATED="1649934271293" HGAP="108" ID="ID_650369431" MODIFIED="1649934279828" TEXT="Criar Conte&#xfa;do da Mensagem" VSHIFT="-27">
<node CREATED="1649934286518" HGAP="83" ID="ID_20595689" MODIFIED="1649934369162" TEXT="Pacotes Necess&#xe1;rios" VSHIFT="-32">
<node CREATED="1649934344351" HGAP="59" ID="ID_1505166726" MODIFIED="1649934351875" TEXT="MailKit" VSHIFT="-17"/>
<node CREATED="1649934360663" HGAP="63" ID="ID_1370731883" MODIFIED="1649934365976" TEXT="MimeKit" VSHIFT="-30"/>
</node>
<node CREATED="1649936387774" HGAP="85" ID="ID_1413743145" MODIFIED="1649936400777" TEXT="Uso do MimeKit" VSHIFT="19">
<node CREATED="1649936401557" HGAP="61" ID="ID_993282044" MODIFIED="1649936413643" TEXT="Padr&#xe3;o de um email" VSHIFT="-18"/>
<node CREATED="1649936448773" ID="ID_680229324" MODIFIED="1649936448773">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8199564948956241118.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649936474622" HGAP="122" ID="ID_1667708153" MODIFIED="1649936481051" TEXT="Enviar Email" VSHIFT="28">
<node CREATED="1649936461806" HGAP="75" ID="ID_201604834" MODIFIED="1649936486660" TEXT="Abrir SmtpClient" VSHIFT="-44">
<node CREATED="1650031356053" HGAP="82" ID="ID_206925931" MODIFIED="1650044884802" TEXT="Criar conta no Gmail" VSHIFT="141">
<node CREATED="1650031363698" HGAP="44" ID="ID_727376255" MODIFIED="1650031428702" TEXT="Habilitar: Acesso a App Menos Seguros" VSHIFT="-27"/>
</node>
<node CREATED="1650031431234" HGAP="84" ID="ID_1905748055" MODIFIED="1650044882626" TEXT="AppSettings.json" VSHIFT="19">
<node CREATED="1650031458546" HGAP="65" ID="ID_697744411" MODIFIED="1650031656707" TEXT="&quot;EmailSettings&quot;" VSHIFT="-27">
<node CREATED="1650031649897" HGAP="59" ID="ID_753078371" MODIFIED="1650031654851" VSHIFT="-1">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5791850247018787287.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
<node CREATED="1650044863733" HGAP="388" ID="ID_1815620593" MODIFIED="1650044892299" VSHIFT="41">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_695451423678984873.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1648948523373" HGAP="159" ID="ID_246729072" MODIFIED="1649003694854" POSITION="left" TEXT="Services no padr&#xe3;o MVC" VSHIFT="-119">
<node CREATED="1648948531872" HGAP="47" ID="ID_1216445823" MODIFIED="1648948545026" TEXT="Utilizar Services no Controller" VSHIFT="-31">
<node CREATED="1648948552889" HGAP="38" ID="ID_1195275412" MODIFIED="1648948625372" TEXT="Adicionar ao escopo da aplica&#xe7;&#xe3;o" VSHIFT="-24">
<node CREATED="1648948627768" HGAP="58" ID="ID_828518343" MODIFIED="1648948671370" TEXT="Em Startup.cs" VSHIFT="21"/>
<node CREATED="1648948637833" HGAP="53" ID="ID_245092933" MODIFIED="1648948654736" TEXT="services.AddScoped&lt;Service, Service&gt;();" VSHIFT="-52"/>
<node CREATED="1648948697370" HGAP="33" ID="ID_463409087" MODIFIED="1648948699990" VSHIFT="5">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_428480252955677768.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1649003696488" HGAP="37" ID="ID_1275903105" MODIFIED="1649003730826" POSITION="right" TEXT="Implementando Controle de Usu&#xe1;rio">
<node CREATED="1649003732229" HGAP="60" ID="ID_199945182" MODIFIED="1649003747605" TEXT="Novo Projeto (nova API)" VSHIFT="-40">
<node CREATED="1649003748493" HGAP="54" ID="ID_517587340" MODIFIED="1649003769273" TEXT="Cadastro de Usu&#xe1;rios" VSHIFT="-37">
<node CREATED="1649003770237" HGAP="41" ID="ID_1090129095" MODIFIED="1649003779776" TEXT="CadastroController.cs" VSHIFT="-27"/>
<node CREATED="1649003784477" HGAP="44" ID="ID_583000700" MODIFIED="1649675789730" TEXT="Dtos" VSHIFT="12">
<node CREATED="1649003794286" HGAP="38" ID="ID_546813905" MODIFIED="1649675790604" TEXT="CreateUsuarioDto" VSHIFT="-16">
<node CREATED="1649003803229" HGAP="34" ID="ID_1858723460" MODIFIED="1649003932497" VSHIFT="-26">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Para senhas &#233; importante informar o DataType e
    </p>
    <p>
      &#160;fazer a Verifica&#231;&#227;o entre o Password e o RePassword
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1649004021010" HGAP="33" ID="ID_528984321" MODIFIED="1649004023711" VSHIFT="-2">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6798606877166717487.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1649004153405" HGAP="44" ID="ID_1597430640" MODIFIED="1649004160977" TEXT="Models" VSHIFT="43">
<node CREATED="1649004161893" HGAP="32" ID="ID_540750715" MODIFIED="1649005958315" TEXT="O modelo de Usu&#xe1;rio n&#xe3;o deve trazer as informa&#xe7;&#xf5;es de senha do banco e trafegar com ela pela aplica&#xe7;&#xe3;o" VSHIFT="-9"/>
</node>
</node>
</node>
</node>
</node>
</map>
