<map version="1.0.1">
<!-- To view this file, download free mind mapping software FreeMind from http://freemind.sourceforge.net -->
<node CREATED="1650110008978" ID="ID_499878417" MODIFIED="1650189994704" TEXT="Constru&#xe7;&#xe3;o da API">
<node CREATED="1650110701410" HGAP="68" ID="ID_1339157640" MODIFIED="1650189995984" POSITION="right" TEXT="Secret Manager .Net" VSHIFT="-46">
<node CREATED="1650110710196" HGAP="51" ID="ID_582717009" MODIFIED="1650189996019" TEXT="CMD na pasta da Solu&#xe7;&#xe3;o" VSHIFT="-21">
<node CREATED="1650110750753" HGAP="55" ID="ID_1206708797" MODIFIED="1650110788754" TEXT="&quot;dotnet user-secrets init&quot;" VSHIFT="-21">
<edge COLOR="#ff0000"/>
</node>
<node CREATED="1650110782099" HGAP="78" ID="ID_678554576" MODIFIED="1650189996074" TEXT="Define automaticamente o endere&#xe7;o desse UserSecrets no .Csproj" VSHIFT="-25">
<node CREATED="1650110900323" MODIFIED="1650110900323">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5053479952105855912.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1650110942771" HGAP="25" ID="ID_27379379" MODIFIED="1650189996074" TEXT="Para definir informa&#xe7;&#xf5;es dentro" VSHIFT="24">
<node CREATED="1650110955530" HGAP="40" ID="ID_1805589533" MODIFIED="1650189996134" TEXT="&quot;dotnet user-secrets set &quot;Caminho:Especificando&quot; &quot;ValorDefinido&quot; &quot;" VSHIFT="-25">
<edge COLOR="#ff0000"/>
<node CREATED="1650111404506" ID="ID_1996570207" MODIFIED="1650111423072" TEXT="-&gt; &quot;EmailSettings:From&quot; &quot;EmailQualquer@gmail.com&quot;"/>
<node CREATED="1650111404506" ID="ID_1676819671" MODIFIED="1650111446334" TEXT="-&gt; &quot;EmailSettings:SmtpServer&quot; &quot;smtp.gmail.com&quot;"/>
<node CREATED="1650111404506" ID="ID_1941690285" MODIFIED="1650111458310" TEXT="-&gt; &quot;EmailSettings:Port&quot; &quot;465&quot;"/>
<node CREATED="1650111404506" ID="ID_609098983" MODIFIED="1650111471471" TEXT="-&gt; &quot;EmailSettings:Password&quot; &quot;SenhaQualquerForte&quot;"/>
</node>
</node>
<node CREATED="1650111601409" HGAP="26" ID="ID_501733819" MODIFIED="1650189996074" TEXT="Para utilizar" VSHIFT="74">
<node CREATED="1650111608651" HGAP="52" ID="ID_497644752" MODIFIED="1650189996139" TEXT="Program.cs" VSHIFT="-20">
<node CREATED="1650111671456" HGAP="57" ID="ID_665912291" MODIFIED="1650189996234" VSHIFT="-6">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7177369973137592511.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1650111755752" HGAP="37" ID="ID_1061486825" MODIFIED="1650111759245">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2486858926345292767.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1650113210721" HGAP="88" ID="ID_1831527717" MODIFIED="1650189995989" POSITION="left" VSHIFT="-54">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      Fluxo de Redefini&#231;&#227;o de Senha
    </p>
    <p style="text-align: center">
      (dividido em 2 etapas)
    </p>
  </body>
</html></richcontent>
<node CREATED="1650113277224" HGAP="41" ID="ID_1843821732" MODIFIED="1650189996024" TEXT="1 -&gt; Pedir a redefini&#xe7;&#xe3;o" VSHIFT="-16">
<node CREATED="1650114591743" HGAP="30" ID="ID_1353945595" MODIFIED="1650114607113" TEXT="Recebe Email" VSHIFT="-12"/>
<node CREATED="1650114596911" HGAP="29" ID="ID_38150968" MODIFIED="1650114609161" TEXT="Envia Token de Reset" VSHIFT="12"/>
<node CREATED="1650114637044" HGAP="159" ID="ID_1692437747" MODIFIED="1650114645710" VSHIFT="3">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6956139355939826373.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1650113290992" HGAP="44" ID="ID_1334665538" MODIFIED="1650189996034" TEXT="2 -&gt; Efetuar redefini&#xe7;&#xe3;o" VSHIFT="18">
<node CREATED="1650116423686" HGAP="36" ID="ID_323111095" MODIFIED="1650116438405" TEXT="Recebe Email, Senha, Re-Senha e Token" VSHIFT="-15"/>
<node CREATED="1650116444166" HGAP="41" ID="ID_239355153" MODIFIED="1650116451031" TEXT="Retorna Resultado" VSHIFT="3"/>
<node CREATED="1650116484005" HGAP="125" ID="ID_1722768935" MODIFIED="1650116486244" VSHIFT="24">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5721396234376981292.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1650117091366" HGAP="70" ID="ID_735023613" MODIFIED="1650189995989" POSITION="right" TEXT="Unir Solu&#xe7;&#xf5;es de um Mesmo Projeto" VSHIFT="92">
<node CREATED="1650122676124" HGAP="45" ID="ID_301088968" MODIFIED="1650189996034" TEXT="Criar Roles para Usu&#xe1;rios" VSHIFT="-60">
<node CREATED="1650122741916" HGAP="53" ID="ID_1448794774" MODIFIED="1650189996074" TEXT="CadastroService.cs" VSHIFT="-35">
<node CREATED="1650122770308" HGAP="32" ID="ID_1410756594" MODIFIED="1650123071496" TEXT="&quot;private RoleManager&lt;IdentityRole&lt;int&gt;&gt; _roleManager&quot;" VSHIFT="-34"/>
<node CREATED="1650123054092" HGAP="36" ID="ID_501973400" MODIFIED="1650189996144" TEXT="adicionar roles no Cadastro" VSHIFT="2">
<node CREATED="1650123090574" MODIFIED="1650123090574">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_9167615936973261906.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1650123206444" HGAP="39" ID="ID_1121154226" MODIFIED="1650189996039" TEXT="Identificar os Roles dos Usu&#xe1;rios" VSHIFT="11">
<node CREATED="1650123227092" HGAP="38" ID="ID_1883628834" MODIFIED="1650189996079" TEXT="Feito por meio da leitura do Token atribu&#xed;do" VSHIFT="29">
<node CREATED="1650124405266" HGAP="41" ID="ID_1723223127" MODIFIED="1650189996144" TEXT="Dentro do Projeto UsuariosAPI" VSHIFT="-17">
<node CREATED="1650123241060" HGAP="52" ID="ID_1697058829" MODIFIED="1650189996245" TEXT="LoginService.cs" VSHIFT="-77">
<node CREATED="1650123301873" ID="ID_394682573" MODIFIED="1650189996504">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_1891650131990403481.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1650123537014" MODIFIED="1650123537014">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4835431277821125987.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1650123542036" HGAP="46" ID="ID_1075666896" MODIFIED="1650189996246" TEXT="TokenService.cs" VSHIFT="-14">
<node CREATED="1650123573263" MODIFIED="1650123573263">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7426576356013382340.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1650124405266" HGAP="49" ID="ID_1748853983" MODIFIED="1650189996144" TEXT="Dentro do Projeto FilmesAPI" VSHIFT="49">
<node CREATED="1650125153242" HGAP="47" ID="ID_1992728073" MODIFIED="1650189996246" TEXT="Controllers" VSHIFT="-14">
<node CREATED="1650125160770" HGAP="29" ID="ID_755684618" MODIFIED="1650189996519" TEXT="Valida&#xe7;&#xe3;o de Role" VSHIFT="-11">
<node CREATED="1650163460322" HGAP="66" ID="ID_105304112" MODIFIED="1650163463336" VSHIFT="1">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2378651960647208907.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1650125314090" HGAP="38" ID="ID_1492271057" MODIFIED="1650189996246" TEXT="Startup.cs" VSHIFT="-22">
<node CREATED="1650125329770" HGAP="39" ID="ID_1580326742" MODIFIED="1650189996529" TEXT="ConfigureServices()" VSHIFT="-27">
<node CREATED="1650126227367" HGAP="64" ID="ID_620373682" MODIFIED="1650126230972" VSHIFT="-5">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4888524645217819649.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1650126285377" HGAP="34" ID="ID_1037070642" MODIFIED="1650189996534" TEXT="Configure()" VSHIFT="21">
<node CREATED="1650126387395" HGAP="117" ID="ID_1213239113" MODIFIED="1650126397961" VSHIFT="-14">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7871487989327801567.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1650132655928" HGAP="36" ID="ID_767732806" MODIFIED="1650189996039" TEXT="Criando Adm &#xda;nico / Contas Regulares" VSHIFT="35">
<node CREATED="1650132754118" HGAP="34" ID="ID_1309815139" MODIFIED="1650189996079" TEXT="Criar Adm Nativo" VSHIFT="-53">
<node CREATED="1650132761804" HGAP="37" ID="ID_1732192655" MODIFIED="1650189996149" TEXT="UserDbContext.cs" VSHIFT="-26">
<node CREATED="1650163101234" HGAP="39" ID="ID_543087076" MODIFIED="1650189996254" TEXT="Para receber as informa&#xe7;&#xf5;es do Secrets" VSHIFT="-44">
<node CREATED="1650163109219" MODIFIED="1650163109219">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5910122389026015570.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1650163120673" HGAP="33" ID="ID_1058916740" MODIFIED="1650189996271" TEXT="Criar administradror nativo com Migration" VSHIFT="-3">
<node CREATED="1650163237235" HGAP="70" ID="ID_406436615" MODIFIED="1650163486204">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6946110294132391681.jpeg" />
  </body>
</html></richcontent>
</node>
<node CREATED="1650163272904" HGAP="70" ID="ID_1458370825" MODIFIED="1650163495916" VSHIFT="-3">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7407977164095987091.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1650134798292" ID="ID_299184061" MODIFIED="1650189996149" TEXT="Criar Migration">
<node CREATED="1650163667504" HGAP="35" ID="ID_804211795" MODIFIED="1650163695501" TEXT="&quot; Add-Migration &apos;usuario admin&apos; &quot;" VSHIFT="-8"/>
<node CREATED="1650134804531" HGAP="39" ID="ID_1860466974" MODIFIED="1650189996274" TEXT="Caso d&#xea; ruim" VSHIFT="38">
<node CREATED="1650134813892" LINK="https://stackoverflow.com/questions/64496451/add-migration-causing-could-not-load-assembly-ensure-it-is-referenced-by-the" MODIFIED="1650134813892" TEXT="https://stackoverflow.com/questions/64496451/add-migration-causing-could-not-load-assembly-ensure-it-is-referenced-by-the"/>
</node>
</node>
</node>
</node>
<node CREATED="1650164259010" HGAP="36" ID="ID_199276332" MODIFIED="1650189996039" TEXT="Pol&#xed;ticas Customizadas" VSHIFT="51">
<node CREATED="1650164273617" HGAP="27" ID="ID_747504727" MODIFIED="1650164483881" VSHIFT="-21">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      Validar tamb&#233;m a Idade junto do Role
    </p>
    <p style="text-align: center">
      (conhecido como uma Pol&#237;tica de Acesso)
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1650164485953" HGAP="36" ID="ID_935768025" MODIFIED="1650189996079" TEXT="criar Modelo Customizado" VSHIFT="10">
<node CREATED="1650164747776" HGAP="41" ID="ID_21304696" MODIFIED="1650189996149" TEXT="CustomIdentityUser.cs" VSHIFT="-33">
<node CREATED="1650164681161" HGAP="36" ID="ID_1504423740" MODIFIED="1650164840382" VSHIFT="2">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6089055832285796762.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1650164761857" HGAP="28" ID="ID_779644221" MODIFIED="1650189996154" TEXT="Conformar Usuario.cs ao novo modelo" VSHIFT="4">
<node CREATED="1650164805398" HGAP="38" ID="ID_931091870" MODIFIED="1650189996279" VSHIFT="-1">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2710277246817611176.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1650164831960" HGAP="32" ID="ID_1682233160" MODIFIED="1650164835254">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7074447802173911550.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1650164873519" HGAP="29" ID="ID_862324083" MODIFIED="1650189996159" TEXT="Conformar Profiles &gt; UsuarioProfile.cs" VSHIFT="93">
<node CREATED="1650164913795" ID="ID_754127577" MODIFIED="1650189996279">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8555206387117245775.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1650164958020" MODIFIED="1650164958020">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7468649901352786801.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1650165432095" HGAP="33" ID="ID_1888114866" MODIFIED="1650165475286" TEXT="Conformar Data &gt; Dto &gt; Usuario &gt; CreateUsuarioDto.cs" VSHIFT="25"/>
<node CREATED="1650165122327" HGAP="35" ID="ID_1498532000" MODIFIED="1650189996159" TEXT="No resto do projeto" VSHIFT="55">
<node CREATED="1650165134751" HGAP="33" ID="ID_572043562" MODIFIED="1650165155134" TEXT="&quot;IdentityUser&lt;int&gt;&quot; agora dever&#xe1; ser &quot;CustomIdentityUser&quot;" VSHIFT="-18"/>
<node CREATED="1650165476592" ID="ID_312404318" MODIFIED="1650165482340" TEXT="Atalho para encontrar CTRL + F"/>
<node CREATED="1650165482887" ID="ID_1124318598" MODIFIED="1650165495156" TEXT="Atalha para olhar todos arquivos SHIFT + CTRL + F"/>
</node>
</node>
<node CREATED="1650171672864" HGAP="34" ID="ID_1794514203" MODIFIED="1650189996084" TEXT="criar Policy Customizada" VSHIFT="40">
<node CREATED="1650171908111" HGAP="28" ID="ID_686561973" MODIFIED="1650189996164" TEXT="Valida&#xe7;&#xe3;o no Controlador" VSHIFT="-20">
<node CREATED="1650189415374" HGAP="53" ID="ID_265282717" MODIFIED="1650189417674" VSHIFT="1">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5302640132264711184.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1650171915680" HGAP="29" ID="ID_55441074" MODIFIED="1650189996169" TEXT="Inserir no Startup.cs" VSHIFT="9">
<node CREATED="1650189494459" HGAP="34" ID="ID_494219145" MODIFIED="1650189996284" TEXT="ConfigureServices()" VSHIFT="-6">
<node CREATED="1650174144837" ID="ID_622895614" MODIFIED="1650189996539" TEXT="AddAuthorization()" VSHIFT="-9">
<node CREATED="1650189563228" HGAP="25" ID="ID_355851398" MODIFIED="1650189654168" TEXT="Insere a Policy no Authorization da Solu&#xe7;&#xe3;o" VSHIFT="-6"/>
</node>
<node CREATED="1650174150750" ID="ID_1920973192" MODIFIED="1650189996539" TEXT="AddSingleton()" VSHIFT="15">
<node CREATED="1650189528148" HGAP="32" ID="ID_912693656" MODIFIED="1650189652023" TEXT="Insere o Handler dessa Policy customizada" VSHIFT="-3"/>
</node>
<node CREATED="1650189531134" HGAP="31" ID="ID_819560136" MODIFIED="1650189537049" VSHIFT="30">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5404659706106483019.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
<node CREATED="1650171925175" HGAP="32" ID="ID_906554906" MODIFIED="1650189996169" TEXT="Criar Policy" VSHIFT="29">
<node CREATED="1650172785367" HGAP="23" ID="ID_12693652" MODIFIED="1650189996284" TEXT="Criar Requirement" VSHIFT="-11">
<node CREATED="1650189738780" HGAP="32" ID="ID_1830254816" MODIFIED="1650189996539" TEXT="Authorization &gt; IdadeMinimaRequirement.cs" VSHIFT="-10">
<node CREATED="1650189890859" MODIFIED="1650189890859">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2922753743105999691.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
<node CREATED="1650172790295" HGAP="23" ID="ID_204298945" MODIFIED="1650189996289" TEXT="Criar Handler" VSHIFT="17">
<node CREATED="1650189738780" HGAP="29" ID="ID_1234772856" MODIFIED="1650189996554" TEXT="Authorization &gt; IdadeMinimaHandler.cs" VSHIFT="13">
<node CREATED="1650190042984" HGAP="75" ID="ID_1185742946" MODIFIED="1650190047210" VSHIFT="2">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2200591305313258767.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1650174260365" HGAP="24" ID="ID_129966515" MODIFIED="1650174268987" TEXT="Inserir no TokenService.cs" VSHIFT="25">
<node CREATED="1650190109462" HGAP="154" ID="ID_1428077805" MODIFIED="1650190112082" VSHIFT="4">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5736551815456094256.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
</node>
</node>
</node>
</map>
