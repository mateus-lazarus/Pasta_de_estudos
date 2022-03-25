<map version="1.0.1">
<!-- To view this file, download free mind mapping software FreeMind from http://freemind.sourceforge.net -->
<node CREATED="1647981835296" ID="ID_999025635" MODIFIED="1648077600617" TEXT="Contru&#xe7;&#xe3;o API">
<node CREATED="1648041546960" FOLDED="true" HGAP="344" ID="ID_189687936" MODIFIED="1648077600548" POSITION="right" TEXT="Rela&#xe7;&#xf5;es" VSHIFT="-70">
<node CREATED="1647985990153" FOLDED="true" ID="ID_1906702247" MODIFIED="1648077600502" TEXT="Rela&#xe7;&#xe3;o One-To-One">
<node CREATED="1647987274399" HGAP="29" ID="ID_927265115" MODIFIED="1647987494395" VSHIFT="-32">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Nessa rela&#231;&#227;o um membro depende da <b>EXIST&#202;NCIA</b>&#160;do outro
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1647987485270" FOLDED="true" ID="ID_847468609" MODIFIED="1648050633605" TEXT="1. Defina o membro dependente">
<node CREATED="1647987539288" HGAP="56" ID="ID_1899575160" MODIFIED="1647988024101" TEXT="Afirmar qual ser&#xe1; o TIPO DE OBJETO alvo" VSHIFT="39"/>
<node CREATED="1647987610297" HGAP="56" ID="ID_1737352284" MODIFIED="1647988021045" TEXT="Definir o campo para a Foreign Key" VSHIFT="-18"/>
<node CREATED="1647988013994" ID="ID_904502844" MODIFIED="1647988013994">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6558187059590478978.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647988096328" FOLDED="true" HGAP="17" ID="ID_768912957" MODIFIED="1648050633605" TEXT="2. Defina o membro prim&#xe1;rio" VSHIFT="65">
<node CREATED="1647988194308" HGAP="34" ID="ID_1529143977" MODIFIED="1647988217916" TEXT="Afirmar qual ser&#xe1; o TIPO DO DEPENDENTE" VSHIFT="-22"/>
<node CREATED="1647988375497" MODIFIED="1647988375497">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_4509679312143260106.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647988412946" FOLDED="true" HGAP="19" ID="ID_376385904" MODIFIED="1648050633605" TEXT="3. Criar e Analisar Migration" VSHIFT="96">
<node CREATED="1647988427211" FOLDED="true" HGAP="34" ID="ID_1186806346" MODIFIED="1648050632405" TEXT="Console do Gerenciador de Pacotes" VSHIFT="-23">
<node CREATED="1647988457204" HGAP="52" ID="ID_1427709222" MODIFIED="1647988481406" TEXT="Add-Migration &quot;Migration_Name&quot;" VSHIFT="-15"/>
</node>
</node>
</node>
<node CREATED="1648003973559" FOLDED="true" HGAP="43" ID="ID_751045992" MODIFIED="1648077600502" TEXT="Rela&#xe7;&#xe3;o One-To-Many" VSHIFT="266">
<node CREATED="1648038528998" HGAP="47" ID="ID_483941582" MODIFIED="1648038748198" TEXT="Uma rela&#xe7;&#xe3;o de Um para Nenhum, Um ou V&#xe1;rios" VSHIFT="-34"/>
<node CREATED="1648038556786" HGAP="88" ID="ID_200815704" MODIFIED="1648038749590" TEXT="1. A Entidade que se relaciona a v&#xe1;rios recebe uma List&lt;Cinema&gt;" VSHIFT="31"/>
<node CREATED="1648038670230" FOLDED="true" HGAP="82" ID="ID_982982114" MODIFIED="1648050633605" TEXT="2. Membro dependente " VSHIFT="5">
<node CREATED="1647987539288" HGAP="56" ID="ID_1629140078" MODIFIED="1647988024101" TEXT="Afirmar qual ser&#xe1; o TIPO DE OBJETO alvo" VSHIFT="39"/>
<node CREATED="1647987610297" HGAP="56" ID="ID_1508930211" MODIFIED="1647988021045" TEXT="Definir o campo para a Foreign Key" VSHIFT="-18"/>
<node CREATED="1647988013994" ID="ID_412405824" MODIFIED="1647988013994">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_6558187059590478978.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1648038786755" FOLDED="true" HGAP="82" ID="ID_1760365232" MODIFIED="1648050633605" TEXT="3. Definir regras no DbContext" VSHIFT="115">
<node CREATED="1648039027122" FOLDED="true" HGAP="41" ID="ID_1708516234" MODIFIED="1648050632406" TEXT="AppDbContext.cs &gt; OnModelCreating()" VSHIFT="26">
<node CREATED="1648039402551" MODIFIED="1648039402551">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_1785545255211310478.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1648050641128" FOLDED="true" HGAP="63" ID="ID_1032142267" MODIFIED="1648077600502" TEXT="Rela&#xe7;&#xe3;o Many-To-Many" VSHIFT="160">
<node CREATED="1648055789133" HGAP="51" ID="ID_1657588585" MODIFIED="1648066590642" VSHIFT="-67">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5144104609645765242.jpeg" />
  </body>
</html></richcontent>
</node>
<node CREATED="1648050786844" FOLDED="true" HGAP="53" ID="ID_1749265062" MODIFIED="1648077600439" TEXT="1. Adicionar a rela&#xe7;&#xe3;o Many entre as Entidades" VSHIFT="-24">
<node CREATED="1648050801764" HGAP="42" ID="ID_677030408" MODIFIED="1648066594720" TEXT="&#xc9; literalmente somente isso, pois a partir do EF Core 5.0 voc&#xea;&#xa; n&#xe3;o precisa mais explicitar uma rela&#xe7;&#xe3;o Many-To-Many" VSHIFT="-26"/>
</node>
<node CREATED="1648066611344" FOLDED="true" HGAP="54" ID="ID_1343625165" MODIFIED="1648077600439" TEXT="2. Definir no AppDbContext.cs &gt; OnModelCreating()" VSHIFT="2">
<node CREATED="1648066640455" HGAP="37" ID="ID_1740823489" MODIFIED="1648066676273" TEXT="Uma sess&#xe3;o para ser criada possui duas FKs, o FilmeId e o CinemaId" VSHIFT="-16"/>
<node CREATED="1648066707760" HGAP="36" ID="ID_1617422623" MODIFIED="1648066711041" VSHIFT="-1">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7703708274018429758.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
</node>
<node CREATED="1648041573487" FOLDED="true" HGAP="126" ID="ID_1998460044" MODIFIED="1648077600548" POSITION="left" TEXT="Evitar Loop na Query do EF Core" VSHIFT="-9">
<node CREATED="1648041595991" FOLDED="true" HGAP="40" ID="ID_1035100617" MODIFIED="1648077600502" TEXT="Em casos de rela&#xe7;&#xf5;es entre Entidades formar&#xe1; um loop" VSHIFT="-28">
<node CREATED="1648041642456" HGAP="40" ID="ID_360642342" MODIFIED="1648041744467" TEXT="Um Cinema tem um Endereco" VSHIFT="4"/>
<node CREATED="1648041650760" HGAP="42" ID="ID_1224166530" MODIFIED="1648041740114" TEXT="Um Endereco tem um Cinema" VSHIFT="-9"/>
<node CREATED="1648041661632" ID="ID_169434151" MODIFIED="1648041664677" TEXT="Loop formado"/>
</node>
<node CREATED="1648041767435" FOLDED="true" ID="ID_1356884699" MODIFIED="1648077600502" TEXT="Solu&#xe7;&#xf5;es">
<node CREATED="1648041770388" HGAP="53" ID="ID_1656641850" MODIFIED="1648041782657" TEXT="1. [JsonIgnore]" VSHIFT="-19"/>
<node CREATED="1648043140329" FOLDED="true" HGAP="52" ID="ID_1716745985" MODIFIED="1648050633605" TEXT="2. using AutoMapper" VSHIFT="4">
<node CREATED="1648043473493" FOLDED="true" HGAP="39" ID="ID_1946927639" MODIFIED="1648050632406" VSHIFT="-18">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Acessar o Profile da Entidade
    </p>
    <p>
      ( Profiles &gt; {Entidade}Profile.cs )
    </p>
  </body>
</html></richcontent>
<node CREATED="1648043638489" FOLDED="true" HGAP="68" ID="ID_610721541" MODIFIED="1648050632369" VSHIFT="-30">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      Definir quais fields ser&#227;o selecionados da
    </p>
    <p style="text-align: center">
      &#160;Entidade com quem se relaciona
    </p>
    <p style="text-align: center">
      
    </p>
    <p style="text-align: center">
      (evitando o field que faz a refer&#234;ncia-loop)
    </p>
  </body>
</html></richcontent>
<node CREATED="1648044584297" FOLDED="true" ID="ID_470175407" MODIFIED="1648050632334" TEXT=".ForMember">
<node CREATED="1648044600386" HGAP="25" ID="ID_562020864" MODIFIED="1648044698721" VSHIFT="-21">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      (o field que carrega outras entidades)
    </p>
    <p>
      gerente =&gt; gerente.Cinemas
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1648044662908" FOLDED="true" HGAP="26" ID="ID_759690293" MODIFIED="1648050632329" VSHIFT="11">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      (op&#231;&#245;es a implementar nesse field)
    </p>
    <p>
      options =&gt; options.MapFrom
    </p>
  </body>
</html></richcontent>
<node CREATED="1648044701149" FOLDED="true" HGAP="40" ID="ID_973205380" MODIFIED="1648050632310" VSHIFT="26">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      (Seleciona o que vai ser carregado da Entidade)
    </p>
    <p>
      .MapFrom
    </p>
  </body>
</html></richcontent>
<node CREATED="1648044745989" FOLDED="true" HGAP="30" ID="ID_298857558" MODIFIED="1648050632310" TEXT="gerente =&gt; gerente.Cinemas.Select">
<node CREATED="1648044772815" FOLDED="true" HGAP="30" ID="ID_250061640" MODIFIED="1648050632245" VSHIFT="-13">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      (n&#227;o seleciono o field que geraria o loop de queries)<br /><br />.Select (cinema =&gt; new {
    </p>
    <p>
      &#160;&#160;&#160;&#160;cinema.Id,
    </p>
    <p>
      &#160;&#160;&#160;&#160;cinema.Nome,
    </p>
    <p>
      &#160;&#160;&#160;&#160;cinema.Endereco,
    </p>
    <p>
      &#160;&#160;&#160;&#160;cinema.EnderecoId
    </p>
    <p>
      }
    </p>
  </body>
</html></richcontent>
<node CREATED="1648045000579" HGAP="38" ID="ID_1220959607" MODIFIED="1648045004921" VSHIFT="42">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_7598417077329195083.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1648043551902" FOLDED="true" HGAP="26" ID="ID_1155545981" MODIFIED="1648050632406" VSHIFT="31">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Modificar o ReadDto da Entidade
    </p>
    <p>
      ( Data &gt; Dtos &gt; {Entidade}Dto.cs )
    </p>
  </body>
</html></richcontent>
<node CREATED="1648043812087" FOLDED="true" HGAP="40" ID="ID_192082186" MODIFIED="1648050632369" VSHIFT="17">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Ao inv&#233;s de receber uma Entidade (ou List&lt;Entidade&gt;) ir&#225;
    </p>
    <p>
      &#160;receber um OBJETO AN&#212;NIMO contendo o mapeamento
    </p>
    <p>
      &#160;feito em Profile
    </p>
  </body>
</html></richcontent>
<node CREATED="1648043910563" FOLDED="true" ID="ID_1889195738" MODIFIED="1648050632334">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_8122130811047059639.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1648043930440" HGAP="24" ID="ID_564330381" MODIFIED="1648043942272" VSHIFT="-9">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5809206826987217339.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1648073401143" FOLDED="true" HGAP="24" ID="ID_1864186714" MODIFIED="1648077600548" POSITION="left" TEXT="Definir Informa&#xe7;&#xf5;es em Execu&#xe7;&#xe3;o" VSHIFT="84">
<node CREATED="1648075093343" HGAP="33" ID="ID_48876244" MODIFIED="1648075364532" VSHIFT="-15">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Calcular hor&#225;rio de in&#237;cio de um filme baseado
    </p>
    <p>
      &#160;em hor&#225;rio de encerramento e dura&#231;&#227;o
    </p>
  </body>
</html>
</richcontent>
</node>
<node CREATED="1648075360094" MODIFIED="1648075360094">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_9021068446845733930.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1648077602247" HGAP="80" ID="ID_162784437" MODIFIED="1648077630986" POSITION="right" TEXT="Receber informa&#xe7;&#xf5;es na Query da URI" VSHIFT="84">
<node CREATED="1648077615681" HGAP="70" ID="ID_170014109" MODIFIED="1648077675848" TEXT="M&#xe9;todo recebe par&#xe2;metro" VSHIFT="-1"/>
<node CREATED="1648077666962" ID="ID_127026618" MODIFIED="1648077678458" VSHIFT="18">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_5002639792214115177.jpeg" />
  </body>
</html></richcontent>
<node CREATED="1648077683299" HGAP="56" ID="ID_488346231" MODIFIED="1648077702832" TEXT="[FromQuery] Type queryParameter" VSHIFT="2"/>
<node CREATED="1648077840345" HGAP="40" ID="ID_1815876835" MODIFIED="1648077842485" VSHIFT="29">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Construcao_API_1_1955688521692270187.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
</node>
</map>
