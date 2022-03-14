<map version="1.0.1">
<!-- To view this file, download free mind mapping software FreeMind from http://freemind.sourceforge.net -->
<node CREATED="1647152510347" ID="ID_776201108" MODIFIED="1647258612411" TEXT="API RESTful - Constru&#xe7;&#xe3;o">
<node CREATED="1647154277188" FOLDED="true" HGAP="70" ID="ID_1390151592" MODIFIED="1647262834372" POSITION="right" TEXT="Banco de Dados (MySQL)" VSHIFT="-207">
<node CREATED="1647178582863" FOLDED="true" HGAP="33" ID="ID_1506532661" MODIFIED="1647258611667" TEXT="Fazer conex&#xe3;o" VSHIFT="-126">
<node CREATED="1647178614623" FOLDED="true" HGAP="44" ID="ID_512666517" MODIFIED="1647258611588" TEXT="Pacotes Adicionais" VSHIFT="-71">
<node CREATED="1647178623895" FOLDED="true" HGAP="27" ID="ID_1943309969" MODIFIED="1647258611582" TEXT="Ferramentas &gt; Nuget &gt; Gerenciar Pacotes" VSHIFT="-28">
<node CREATED="1647178692090" HGAP="25" ID="ID_847658309" MODIFIED="1647178699990" TEXT="EntityFrameworkCore" VSHIFT="-31"/>
<node CREATED="1647178692090" HGAP="25" ID="ID_1189799922" MODIFIED="1647178721535" TEXT="EntityFrameworkCore.Tools" VSHIFT="-31"/>
<node CREATED="1647178767028" FOLDED="true" HGAP="61" ID="ID_1689889187" MODIFIED="1647258611485" TEXT="Espec&#xed;fico do Banco de Dados" VSHIFT="1">
<node CREATED="1647178781805" HGAP="28" ID="ID_388632040" MODIFIED="1647178796750" TEXT="{NomeDoBanco} EntityFrameworkCore" VSHIFT="-20"/>
<node CREATED="1647178797462" HGAP="34" ID="ID_1164267134" MODIFIED="1647178821003">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: left">
      No caso,
    </p>
    <p style="text-align: left">
      <b>MySql EntityFrameworkCore</b>
    </p>
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1647178954290" FOLDED="true" HGAP="45" ID="ID_1289653469" MODIFIED="1647258611588" TEXT="Criar arquivos para configura&#xe7;&#xe3;o" VSHIFT="-48">
<node CREATED="1647178974307" FOLDED="true" HGAP="43" ID="ID_1238137030" MODIFIED="1647258611582" VSHIFT="-30">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Nova Pasta &quot;Data&quot;
    </p>
    <p>
      &#160;&gt; Nova Classe &quot;FilmeContext&quot;
    </p>
  </body>
</html></richcontent>
<node CREATED="1647179017047" HGAP="26" ID="ID_1291099700" MODIFIED="1647179024980" VSHIFT="-4">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2032209585046074333.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647179109119" FOLDED="true" HGAP="43" ID="ID_914047696" MODIFIED="1647258611582" VSHIFT="16">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Classe deve implementar <b>DbContext</b>
    </p>
  </body>
</html></richcontent>
<node CREATED="1647179189525" HGAP="25" ID="ID_1358203134" MODIFIED="1647179193382">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_919204352844288258.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647179223532" FOLDED="true" HGAP="53" ID="ID_1601241032" MODIFIED="1647258611582" VSHIFT="26">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Propriedade <b>FilmeContext</b>
    </p>
  </body>
</html></richcontent>
<node CREATED="1647179261517" FOLDED="true" HGAP="29" ID="ID_144578816" MODIFIED="1647258611486" VSHIFT="-8">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Recebe <b>DbContextOptions</b>
    </p>
  </body>
</html></richcontent>
<font NAME="SansSerif" SIZE="12"/>
<node CREATED="1647179479755" HGAP="50" ID="ID_1056382681" MODIFIED="1647179488406" VSHIFT="-13">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4885022604132900155.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1647179671916" FOLDED="true" HGAP="54" ID="ID_997342970" MODIFIED="1647258611583" VSHIFT="13">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Propriedade <b>Filmes</b>
    </p>
  </body>
</html></richcontent>
<node CREATED="1647179712365" FOLDED="true" HGAP="56" ID="ID_1427555815" MODIFIED="1647258611486" TEXT="Define a Entidade" VSHIFT="-11">
<node CREATED="1647179927797" HGAP="37" ID="ID_608231062" MODIFIED="1647179931285" VSHIFT="10">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4700250722928461956.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1647179957205" FOLDED="true" HGAP="32" ID="ID_1823332908" MODIFIED="1647258611589" VSHIFT="24">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Modificar <b>AppSettings.json</b>
    </p>
  </body>
</html></richcontent>
<node CREATED="1647180466039" FOLDED="true" HGAP="42" ID="ID_429677565" MODIFIED="1647258611583" TEXT="Criar string de conex&#xe3;o" VSHIFT="-23">
<node CREATED="1647180475327" FOLDED="true" HGAP="38" ID="ID_1519564815" MODIFIED="1647258611487" TEXT="&quot;ConnectionStrings&quot; &gt; &quot;nomeDaConexao&quot; :" VSHIFT="-15">
<node CREATED="1647180516521" ID="ID_1399557487" MODIFIED="1647180522253" TEXT="server=URL"/>
<node CREATED="1647180522657" ID="ID_1187740583" MODIFIED="1647180543759" TEXT="database=NomeDaTable"/>
<node CREATED="1647180544234" ID="ID_1295693526" MODIFIED="1647180563175" TEXT="user=root"/>
<node CREATED="1647180552266" ID="ID_1514473167" MODIFIED="1647180560071" TEXT="password=Senha"/>
</node>
<node CREATED="1647180615719" HGAP="35" ID="ID_1982197551" MODIFIED="1647180617907" VSHIFT="10">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4053289721226074701.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1647202703747" FOLDED="true" HGAP="33" ID="ID_1957056856" MODIFIED="1647258611667" TEXT="Migration" VSHIFT="-1">
<node CREATED="1647251122661" FOLDED="true" HGAP="21" ID="ID_1849559984" MODIFIED="1647258611589" TEXT="Ferramentas &gt; Nuget &gt; Console" VSHIFT="-17">
<node CREATED="1647251138732" HGAP="24" ID="ID_832973709" MODIFIED="1647251167120" TEXT="Para montar a migration" VSHIFT="-9"/>
<node CREATED="1647251145365" HGAP="23" ID="ID_954580741" MODIFIED="1647251170151" TEXT="&quot;Add-Migration {NomeDoArquivo}&quot;" VSHIFT="3"/>
</node>
<node CREATED="1647251191886" FOLDED="true" ID="ID_249345410" MODIFIED="1647258611589" TEXT="Para executar a Migration">
<node CREATED="1647251198918" HGAP="61" ID="ID_1432462072" MODIFIED="1647251214326" TEXT="Update-Database" VSHIFT="2"/>
</node>
</node>
<node CREATED="1647251866508" FOLDED="true" HGAP="50" ID="ID_439079900" MODIFIED="1647258611667" TEXT="Acessar Entidades" VSHIFT="181">
<node CREATED="1647251880748" FOLDED="true" HGAP="40" ID="ID_1869852050" MODIFIED="1647258611590" TEXT="Cria-se a propriedade (privada normalmente) daquela Entidade" VSHIFT="-33">
<node CREATED="1647252045239" HGAP="36" ID="ID_185708220" MODIFIED="1647252047273" VSHIFT="-4">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4492261998971944676.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647251980376" FOLDED="true" HGAP="46" ID="ID_761966748" MODIFIED="1647258611590" TEXT="Construtor com o acesso &#xe0;s Entidades" VSHIFT="-13">
<node CREATED="1647252255542" HGAP="73" ID="ID_977203200" MODIFIED="1647252257306" VSHIFT="1">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_60019661769892711.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1647252275008" FOLDED="true" HGAP="43" ID="ID_1095365899" MODIFIED="1647258611668" TEXT="&quot;Princ&#xed;pio da fam&#xed;lia&quot; N&#xc3;O EXISTE EM .NET" VSHIFT="86">
<node CREATED="1647252299241" FOLDED="true" HGAP="29" ID="ID_1861766815" MODIFIED="1647258611590" VSHIFT="4">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: right">
      Quem j&#225; &#233; d&#225; fam&#237;lia, <strike>sempre estar&#225; sendo observado</strike><br />tamb&#233;m precisa de aprova&#231;&#227;o<br />
    </p>
  </body>
</html></richcontent>
<node CREATED="1647252313097" HGAP="35" ID="ID_583516956" MODIFIED="1647253426791" VSHIFT="-14">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      portanto <strike>n&#227;o</strike>&#160;<strong>necessita&#160;de SaveChanges()</strong>
    </p>
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647252321737" FOLDED="true" HGAP="28" ID="ID_48871616" MODIFIED="1647258611590" TEXT="Quem vai entrar na fam&#xed;lia, precisa de aprova&#xe7;&#xe3;o" VSHIFT="53">
<node CREATED="1647252331546" FOLDED="true" HGAP="51" ID="ID_1854630870" MODIFIED="1647258611583" TEXT="portanto _context.SaveChanges()" VSHIFT="14">
<node CREATED="1647252559187" HGAP="79" ID="ID_1502806891" MODIFIED="1647252561970">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_161941285928922509.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1647154265917" FOLDED="true" HGAP="80" ID="ID_1596968384" MODIFIED="1647262831475" POSITION="left" TEXT="Conceitos do Padr&#xe3;o" VSHIFT="-193">
<node CREATED="1647154313550" FOLDED="true" HGAP="62" ID="ID_1223042418" MODIFIED="1647258611668" VSHIFT="-44">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      <b>Controller</b>
    </p>
    <p style="text-align: center">
      (por padr&#227;o, ser&#225; <i>WeatherForecastController</i>)
    </p>
  </body>
</html></richcontent>
<node CREATED="1647154354695" FOLDED="true" HGAP="59" ID="ID_1179168651" MODIFIED="1647258611591" TEXT="[ApiController]" VSHIFT="-33">
<node CREATED="1647154398737" HGAP="32" ID="ID_1715295194" MODIFIED="1647154492413" TEXT="Indica que se trata de um controlador de uma API,&#xa;assim preparado para receber e responder HTTP API Responses" VSHIFT="-19"/>
<node CREATED="1647154802874" HGAP="29" ID="ID_689950629" MODIFIED="1647154805030" VSHIFT="-15">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8819370860917833452.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647154496148" FOLDED="true" HGAP="49" ID="ID_496056118" MODIFIED="1647258611591" VSHIFT="26">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      [ Route(<font color="#999900">&quot;[controller]&quot;</font>) ]
    </p>
  </body>
</html></richcontent>
<node CREATED="1647154578646" HGAP="22" ID="ID_592535002" MODIFIED="1647154727066" TEXT="Assim como para um controlador de uma aplica&#xe7;&#xe3;o web o &quot;controller&quot;&#xa;indica o m&#xe9;todo a ser usado de acordo com a conven&#xe7;&#xe3;o de rotas" VSHIFT="-21"/>
<node CREATED="1647154616239" HGAP="33" ID="ID_1728327463" MODIFIED="1647154729963" VSHIFT="-1">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      <b>&quot;/<font color="#999900">WeatherForecast</font>/...&quot;</b>
    </p>
    <p>
      =&gt; WeatherForecastController
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1647154812295" HGAP="18" ID="ID_1572715078" MODIFIED="1647154814576" VSHIFT="17">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2645995604596137428.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647157089053" FOLDED="true" HGAP="50" ID="ID_1145783698" MODIFIED="1647258611591" TEXT="a&#xe7;&#xf5;es HTTP" VSHIFT="113">
<node CREATED="1647157120622" HGAP="37" ID="ID_51942907" MODIFIED="1647157176325" TEXT="S&#xe3;o usadas para identificar a a&#xe7;&#xe3;o que ser&#xe1; feita" VSHIFT="-30"/>
<node CREATED="1647157136590" FOLDED="true" HGAP="29" ID="ID_1182242238" MODIFIED="1647258611583" TEXT="Exemplos:" VSHIFT="-4">
<node CREATED="1647157141783" HGAP="30" ID="ID_1251718496" MODIFIED="1647157188438" TEXT="POST &gt; Criar" VSHIFT="-9"/>
<node CREATED="1647157150767" HGAP="24" ID="ID_1327256424" MODIFIED="1647157184606" TEXT="GET &gt; Receber dados" VSHIFT="-3"/>
<node CREATED="1647157158920" HGAP="24" ID="ID_827661463" MODIFIED="1647157180245" TEXT="DELETE &gt; Deletar" VSHIFT="10"/>
<node CREATED="1647159811331" ID="ID_36048771" MODIFIED="1647159817720" TEXT="PUT &gt; Atualizar"/>
<node CREATED="1647157169336" HGAP="29" ID="ID_241474674" MODIFIED="1647157181894" TEXT="..." VSHIFT="8"/>
</node>
<node CREATED="1647157247739" HGAP="21" ID="ID_1723849658" MODIFIED="1647157251144" VSHIFT="17">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6893865597419816471.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647157773915" FOLDED="true" HGAP="25" ID="ID_130127787" MODIFIED="1647258611591" TEXT="Receber entidade no m&#xe9;todo" VSHIFT="127">
<node CREATED="1647157799068" FOLDED="true" HGAP="39" ID="ID_1538604883" MODIFIED="1647258611584" TEXT="De onde essa entidade vir&#xe1;?" VSHIFT="-11">
<node CREATED="1647157861367" HGAP="41" ID="ID_339498540" MODIFIED="1647157917650" VSHIFT="-78">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_3604610387691691154.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647157808996" FOLDED="true" HGAP="47" ID="ID_1426465874" MODIFIED="1647258611584" TEXT="Qual entidade &#xe9;?" VSHIFT="37">
<node CREATED="1647157890479" HGAP="53" ID="ID_378045550" MODIFIED="1647157898688" VSHIFT="9">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5076903470339367330.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1647164761486" FOLDED="true" HGAP="30" ID="ID_1459923206" MODIFIED="1647258611592" TEXT="Retornar Lista ou Objeto" VSHIFT="135">
<node CREATED="1647164773347" HGAP="50" ID="ID_1948174069" MODIFIED="1647164849336" VSHIFT="-41">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      &#201; interessante que se use uma <b>abstra&#231;&#227;o do </b>
    </p>
    <p>
      <b>&#160;que ser&#225; retornado </b>a fim de tornar o c&#243;digo
    </p>
    <p>
      &#160;mais maduro
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1647164891167" FOLDED="true" HGAP="82" ID="ID_1659915068" MODIFIED="1647258611584" TEXT="Imaturo" VSHIFT="-3">
<node CREATED="1647164921295" HGAP="48" ID="ID_51537186" MODIFIED="1647165031221" VSHIFT="-13">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6077599580034402471.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647164929064" FOLDED="true" HGAP="78" ID="ID_421303729" MODIFIED="1647258611584" TEXT="Maduro" VSHIFT="71">
<node CREATED="1647165021078" FOLDED="true" HGAP="44" ID="ID_272137686" MODIFIED="1647258611488" VSHIFT="-49">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2828067891801818665.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1647165078912" HGAP="42" ID="ID_125380581" MODIFIED="1647165082189" VSHIFT="1">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4050837595640297247.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1647165643414" FOLDED="true" HGAP="27" ID="ID_1224813078" MODIFIED="1647258611593" TEXT="Diferenciar Rotas de um mesmo Controller" VSHIFT="122">
<node CREATED="1647165654246" HGAP="35" ID="ID_1348434370" MODIFIED="1647165684031" TEXT="Usa-se a declara&#xe7;&#xe3;o de par&#xe2;metros para tal identifica&#xe7;&#xe3;o" VSHIFT="-35"/>
<node CREATED="1647165689511" FOLDED="true" HGAP="30" ID="ID_730467281" MODIFIED="1647258611584" VSHIFT="2">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      [ <b>HttpGet </b>]
    </p>
    <p style="text-align: center">
      !=
    </p>
    <p style="text-align: center">
      [ <b>HttpGet(</b><font color="#999900">&quot;{id}&quot;</font><b>) </b>]
    </p>
  </body>
</html></richcontent>
<node CREATED="1647165768482" HGAP="30" ID="ID_38901903" MODIFIED="1647165802528" VSHIFT="2">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      <b>/filme</b>
    </p>
    <p style="text-align: center">
      !=
    </p>
    <p style="text-align: center">
      <b>/filme/<font color="#999900">{id}</font></b>
    </p>
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647165855876" HGAP="22" ID="ID_1029989646" MODIFIED="1647165864615" VSHIFT="47">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8763226916578361335.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647166023514" FOLDED="true" HGAP="24" ID="ID_1892575226" MODIFIED="1647258611593" TEXT="Retornar c&#xf3;digos Http melhores" VSHIFT="173">
<node CREATED="1647166488537" HGAP="37" ID="ID_1939815495" MODIFIED="1647166589954" VSHIFT="-46">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Com a finalidade de manter as boas-pr&#225;ticas do
    </p>
    <p>
      &#160;padr&#227;o REST devolve-se c&#243;digos Http mais claros
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1647166590860" FOLDED="true" ID="ID_777150795" MODIFIED="1647258611585" TEXT="Modifica&#xe7;&#xf5;es:">
<node CREATED="1647166600796" FOLDED="true" HGAP="37" ID="ID_1618377415" MODIFIED="1647258611492" VSHIFT="-24">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      M&#233;todos retornam IActionResult
    </p>
    <p>
      &#160;a fim de retornar c&#243;digos Http
    </p>
  </body>
</html></richcontent>
<node CREATED="1647166742913" HGAP="24" ID="ID_1117976889" MODIFIED="1647166794525" TEXT="Para tal, basta colocar as informa&#xe7;&#xf5;es que devem&#xa; ser enviadas dentro da classe que&#xa; implementa IActionResult" VSHIFT="13"/>
</node>
<node CREATED="1647166717600" HGAP="67" ID="ID_305396648" MODIFIED="1647166961631" VSHIFT="45">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2937038392170754594.jpeg" />
  </body>
</html></richcontent>
</node>
<node CREATED="1647166880149" FOLDED="true" HGAP="28" ID="ID_774348260" MODIFIED="1647258611493" TEXT="Para seguir o padr&#xe3;o REST, deve-se &#xa; retornama localiza&#xe7;&#xe3;o da informa&#xe7;&#xe3;o&#xa; criada e umc&#xf3;digo de cria&#xe7;&#xe3;o 201(Created)" VSHIFT="40">
<node CREATED="1647166864732" HGAP="31" ID="ID_690131362" MODIFIED="1647166957269" VSHIFT="12">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2128246996327073935.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1647157952345" FOLDED="true" HGAP="91" ID="ID_1637585716" MODIFIED="1647258611668" TEXT="LaunchSettings.json" VSHIFT="118">
<node CREATED="1647157958769" FOLDED="true" HGAP="33" ID="ID_1594241904" MODIFIED="1647258611595" TEXT="Evitar que o navegador abra toda vez" VSHIFT="-27">
<node CREATED="1647157969953" HGAP="28" ID="ID_953348501" MODIFIED="1647158084153" TEXT="Para desativar tal fun&#xe7;&#xe3;o &#xe9; necess&#xe1;rio editar algumas linhas" VSHIFT="-30"/>
<node CREATED="1647158062903" FOLDED="true" ID="ID_1153883060" MODIFIED="1647258611585">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2198387170406555861.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1647158126422" MODIFIED="1647158126422">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6351363566308263010.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647158196819" FOLDED="true" HGAP="17" ID="ID_1895414542" MODIFIED="1647258611586" VSHIFT="33">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6616017265498803660.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1647158228034" MODIFIED="1647158228034">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4362469843423660615.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1647161345812" HGAP="123" ID="ID_1396692575" MODIFIED="1647258800848" TEXT="Model" VSHIFT="241">
<font BOLD="true" NAME="SansSerif" SIZE="12"/>
<node CREATED="1647161356853" FOLDED="true" HGAP="55" ID="ID_73728213" MODIFIED="1647260120567" TEXT="Valida&#xe7;&#xf5;es de Campos" VSHIFT="-111">
<node CREATED="1647161382718" ID="ID_1364853403" MODIFIED="1647161552530" VSHIFT="-35">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      Devem ser usadas em cima de cada propriedade declarada na Entidade
    </p>
    <p style="text-align: center">
      (est&#225; no pacote System.ComponentModel.<b>DataAnnotations</b>)
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1647161405965" FOLDED="true" HGAP="25" ID="ID_493745087" MODIFIED="1647258611586" TEXT="Exemplos:">
<node CREATED="1647161415150" HGAP="28" ID="ID_1570496379" MODIFIED="1647161424492" TEXT="[Required]" VSHIFT="-13"/>
<node CREATED="1647161498497" HGAP="25" ID="ID_1162010027" MODIFIED="1647161512289" TEXT="[Range(1, 600)]" VSHIFT="9"/>
<node CREATED="1647161871133" HGAP="28" ID="ID_779281683" MODIFIED="1647161884989" TEXT="[StringLength(30)]" VSHIFT="23"/>
<node CREATED="1647161513097" HGAP="34" ID="ID_388587990" MODIFIED="1647161516547" TEXT="..." VSHIFT="17"/>
</node>
<node CREATED="1647162096400" HGAP="33" ID="ID_561229279" MODIFIED="1647162098567" VSHIFT="58">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_3123190339173862876.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647258805106" ID="ID_1189625294" MODIFIED="1647258809997" TEXT="Data Transfer Objects">
<node CREATED="1647258811241" HGAP="119" ID="ID_1202189765" MODIFIED="1647260123000" TEXT="Serve para resolver o encapsulamento de informa&#xe7;&#xf5;es&#xa; que devem ser geradas por outros processos,&#xa; como o ID de uma coluna no Banco de Dados" VSHIFT="-37"/>
<node CREATED="1647259104522" HGAP="84" ID="ID_1655543234" MODIFIED="1647260127889" TEXT="Problema" VSHIFT="19">
<node CREATED="1647259113570" ID="ID_685716575" MODIFIED="1647259113570">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_1369574455121010190.jpeg" />
  </body>
</html>
</richcontent>
<node CREATED="1647259283897" MODIFIED="1647259283897">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8451107228247724791.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
<node CREATED="1647259118066" HGAP="9" ID="ID_1221068164" MODIFIED="1647259122338" TEXT="Solu&#xe7;&#xe3;o" VSHIFT="153">
<node CREATED="1647259789368" ID="ID_1082555818" MODIFIED="1647259810532" TEXT="Cria-se um objeto com somente as informa&#xe7;&#xf5;es acess&#xed;veis (chamado de DTO)">
<node CREATED="1647260575356" MODIFIED="1647260575356">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_453652527333029888.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647259842504" HGAP="26" ID="ID_321748392" MODIFIED="1647259898109" TEXT="Mant&#xe9;m a forma na Entidade" VSHIFT="75">
<node CREATED="1647259891666" HGAP="115" ID="ID_945546298" MODIFIED="1647259894909" VSHIFT="21">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8407650928584243756.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647259903698" HGAP="18" ID="ID_774544798" MODIFIED="1647259915991" TEXT="Altera m&#xe9;todos com a Entidade" VSHIFT="275">
<node CREATED="1647259921331" HGAP="62" ID="ID_1455939427" MODIFIED="1647259924129" TEXT="Antes" VSHIFT="-69">
<node CREATED="1647260028665" MODIFIED="1647260028665">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4903095277381204782.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647259924948" HGAP="51" ID="ID_1045035924" MODIFIED="1647259929066" TEXT="Depois" VSHIFT="81">
<node CREATED="1647259986820" ID="ID_783214151" MODIFIED="1647259986820">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_936779300327175878.jpeg" />
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
<node CREATED="1647153436491" HGAP="67" ID="ID_1055814598" MODIFIED="1647263126661" POSITION="right" TEXT="Informa&#xe7;&#xe3;o Adicional" VSHIFT="162">
<node CREATED="1647153449266" FOLDED="true" HGAP="38" ID="ID_1944525727" MODIFIED="1647258611669" TEXT="&#xc9; poss&#xed;vel criar um projeto DotNet pelo CMD" VSHIFT="55">
<node CREATED="1647154103128" HGAP="37" ID="ID_204230729" MODIFIED="1647154113194" TEXT="&quot;dotnet new webapi&quot;" VSHIFT="28"/>
</node>
<node CREATED="1647159477632" FOLDED="true" HGAP="44" ID="ID_76167601" MODIFIED="1647272803789" VSHIFT="50">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Caso o PostMan n&#227;o retorne uma resposta, &#233; poss&#237;vel
    </p>
    <p>
      &#160;que seja um problema no certificado SSL
    </p>
  </body>
</html></richcontent>
<node CREATED="1647159509386" FOLDED="true" HGAP="27" ID="ID_350954790" MODIFIED="1647258611595" TEXT="Corre&#xe7;&#xe3;o:" VSHIFT="36">
<node CREATED="1647159515386" HGAP="25" ID="ID_584357958" MODIFIED="1647159536049" TEXT="https://stackoverflow.com/questions/52819808/could-not-get-any-response-in-postman" VSHIFT="-16"/>
<node CREATED="1647159516170" HGAP="26" ID="ID_1822131525" MODIFIED="1647159534058" TEXT="https://youtu.be/vmTIEn7M6oQ" VSHIFT="19"/>
</node>
</node>
<node CREATED="1647263135904" HGAP="35" ID="ID_1435678734" MODIFIED="1647263146573" TEXT="Mapeador de Objetos" VSHIFT="56">
<node CREATED="1647263150321" HGAP="38" ID="ID_157316097" MODIFIED="1647263176882" TEXT="Ferramentas &gt; NuGet &gt; Gerenciar Pacotes" VSHIFT="-23">
<node CREATED="1647263192530" HGAP="47" ID="ID_1030544596" MODIFIED="1647264035786" TEXT="Automapper.Extensions.Microsoft.DependencyInjection (8.1.1)" VSHIFT="-26"/>
</node>
<node CREATED="1647264037949" HGAP="40" ID="ID_513934750" MODIFIED="1647264563209" TEXT="Inicializar" VSHIFT="20">
<node CREATED="1647264051196" HGAP="43" ID="ID_1338145720" MODIFIED="1647264057496" TEXT="Startup.cs" VSHIFT="-11">
<node CREATED="1647264156368" HGAP="54" ID="ID_916143958" MODIFIED="1647264171638" TEXT="adicionar o Automapper no ConfigureServices()" VSHIFT="-22"/>
<node CREATED="1647266400088" HGAP="99" ID="ID_562185721" MODIFIED="1647266401662" VSHIFT="36">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2117767063488839790.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
<node CREATED="1647266532107" HGAP="27" ID="ID_281405371" MODIFIED="1647266553962" TEXT="Identificar Transforma&#xe7;&#xf5;es" VSHIFT="87">
<node CREATED="1647266681967" HGAP="49" ID="ID_989341391" MODIFIED="1647266691243" TEXT="Criar Pasta de Profiles" VSHIFT="-30">
<node CREATED="1647266693839" HGAP="37" ID="ID_439042610" MODIFIED="1647266697372" VSHIFT="-30">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2739604792071516546.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647267128086" HGAP="55" ID="ID_1195484161" MODIFIED="1647267138825" TEXT="Definir transforma&#xe7;&#xf5;es" VSHIFT="28">
<node CREATED="1647267292922" HGAP="52" ID="ID_985483302" MODIFIED="1647267296186" VSHIFT="-18">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7599218242656595289.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647267788089" HGAP="74" ID="ID_277434727" MODIFIED="1647267810499" TEXT="Uso pr&#xe1;tico" VSHIFT="127">
<node CREATED="1647272238086" HGAP="43" ID="ID_1893027704" MODIFIED="1647272476497" TEXT="FilmeController" VSHIFT="39">
<node CREATED="1647272266494" HGAP="48" ID="ID_821221432" MODIFIED="1647272303109" TEXT="Construtor" VSHIFT="-19">
<node CREATED="1647272328072" HGAP="38" ID="ID_574657430" MODIFIED="1647272339451" TEXT="Recebe Interface do Mapeador" VSHIFT="-21"/>
<node CREATED="1647272368442" HGAP="37" ID="ID_1262531603" MODIFIED="1647272372744" VSHIFT="8">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_3792416039898027807.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647272461755" HGAP="47" ID="ID_1518076322" MODIFIED="1647272467024" TEXT="M&#xe9;todos" VSHIFT="20">
<node CREATED="1647272482588" HGAP="41" ID="ID_965021077" MODIFIED="1647272486099" TEXT="Antigo" VSHIFT="-19">
<node CREATED="1647272522473" HGAP="53" ID="ID_1393447556" MODIFIED="1647272528194" VSHIFT="-121">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_2362477591229565265.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647272529526" HGAP="45" ID="ID_1364433146" MODIFIED="1647272555757" TEXT="Depois" VSHIFT="32">
<node CREATED="1647272593539" HGAP="48" ID="ID_552587542" MODIFIED="1647272746572" VSHIFT="9">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4889636273489059936.jpeg" />
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
</node>
</map>
