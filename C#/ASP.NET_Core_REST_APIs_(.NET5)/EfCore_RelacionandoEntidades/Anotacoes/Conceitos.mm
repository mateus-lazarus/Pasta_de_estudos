<map version="1.0.1">
<!-- To view this file, download free mind mapping software FreeMind from http://freemind.sourceforge.net -->
<node CREATED="1647981835296" ID="ID_999025635" MODIFIED="1647981941064" TEXT="Conceitos">
<node CREATED="1647983802478" ID="ID_1021343861" MODIFIED="1647983804026" POSITION="right" TEXT="EF Core">
<node CREATED="1647983805190" ID="ID_1725301137" MODIFIED="1647983813137" TEXT="Entity Framework Core"/>
<node CREATED="1647983813766" ID="ID_989391979" MODIFIED="1647983859571" TEXT="Um pacote de Object-Relational Mapping (ORM) do conjunto .Net Core"/>
<node CREATED="1647984247915" HGAP="21" ID="ID_1482838359" MODIFIED="1647984255149" TEXT="Novidades da Vers&#xe3;o 5.0" VSHIFT="61">
<node CREATED="1647984255963" HGAP="25" ID="ID_1674895376" MODIFIED="1647984324494" TEXT="Many-to-Many" VSHIFT="-20">
<node CREATED="1647984263363" ID="ID_1996768980" MODIFIED="1647984294980" TEXT="Rela&#xe7;&#xf5;es de muitos para muitos n&#xe3;o necessitam mais de declara&#xe7;&#xe3;o expl&#xed;cita"/>
</node>
<node CREATED="1647984310461" ID="ID_1825057369" MODIFIED="1647984313289" TEXT="Consultas LINQ">
<node CREATED="1647984314005" ID="ID_529545694" MODIFIED="1647984318756" TEXT="Podem ser divididas em diversas consultas SQL, inclusive cole&#xe7;&#xf5;es relacionadas"/>
</node>
<node CREATED="1647984337094" HGAP="22" ID="ID_1644720226" MODIFIED="1647984359513" TEXT="Novo Sistema de Log" VSHIFT="27">
<node CREATED="1647984344694" ID="ID_1329486408" MODIFIED="1647984356451" TEXT="Mais simples e pr&#xe1;tico atrav&#xe9;s do novo m&#xe9;todo LogTo()"/>
</node>
<node CREATED="1647984365487" HGAP="23" ID="ID_139620974" MODIFIED="1647984376174" TEXT="Inclus&#xf5;es Filtradas s&#xe3;o poss&#xed;veis" VSHIFT="30"/>
</node>
<node CREATED="1647989475571" HGAP="12" ID="ID_368532128" MODIFIED="1647989487749" TEXT="Criar rela&#xe7;&#xf5;es entre Entidades" VSHIFT="114">
<node CREATED="1647989488683" HGAP="15" ID="ID_1891453979" MODIFIED="1647989649703" TEXT="&#xc9; necess&#xe1;rio que se fa&#xe7;a uma customiza&#xe7;&#xe3;o para deixar claro os crit&#xe9;rios de cria&#xe7;&#xe3;o de Entidades com rela&#xe7;&#xf5;es" VSHIFT="-34">
<node CREATED="1647989723290" HGAP="31" ID="ID_941344578" MODIFIED="1647989812106" TEXT="Tal fun&#xe7;&#xe3;o &#xe9; da Classe DbContext" VSHIFT="-1">
<node CREATED="1647989760820" HGAP="29" ID="ID_42498251" MODIFIED="1647989814748" VSHIFT="-13">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      da Fun&#231;&#227;o OnModelCreating()
    </p>
    <p style="text-align: center">
      que recebe um ModelBuilder
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1647989817774" ID="ID_184594449" MODIFIED="1647989859177">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      e define o TIPO DE RELA&#199;&#195;O e os crit&#233;rios<br />para se criar Entidades
    </p>
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1647989565870" HGAP="15" ID="ID_734464772" MODIFIED="1647989647297" TEXT="Exemplo" VSHIFT="32">
<node CREATED="1647989568310" HGAP="35" ID="ID_484359013" MODIFIED="1647989652328" TEXT="Uma Entidade que se relaciona com outra (one-to-one) deve ser criada somente ap&#xf3;s a exist&#xea;ncia da outra, ou seja, Cinemas n&#xe3;o podem ser criados antes de Endere&#xe7;os" VSHIFT="6">
<node CREATED="1647989657953" HGAP="40" ID="ID_1689396013" MODIFIED="1647989686163" TEXT="A solu&#xe7;&#xe3;o &#xe9; que para todo Cinema criado, se vincule uma Foreign Key para um Endere&#xe7;o" VSHIFT="-12"/>
<node CREATED="1647989717290" HGAP="37" ID="ID_1578451066" MODIFIED="1647989720009" VSHIFT="9">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_56926395423867880.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1647990085966" HGAP="17" ID="ID_634030101" MODIFIED="1647990298343" TEXT="Use Lazy Loading Proxies" VSHIFT="57">
<node CREATED="1647990181529" HGAP="29" ID="ID_1224561586" MODIFIED="1647990194838" TEXT="Para que ao buscar uma Entidade relacionada no Banco de Dados, ele tamb&#xe9;m retorne as informa&#xe7;&#xf5;es da sua FK" VSHIFT="-31"/>
<node CREATED="1647990200689" ID="ID_1148953828" MODIFIED="1647990237124" TEXT="Startup.cs &gt; ConfigureServices()">
<node CREATED="1647990243354" HGAP="28" ID="ID_348031579" MODIFIED="1647990355496" TEXT="( opts =&gt; opts.UseLazyLoadingProxies() )" VSHIFT="25">
<node CREATED="1647990350493" MODIFIED="1647990350493">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_4567280267997685566.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1647990450633" HGAP="17" ID="ID_1450123638" MODIFIED="1647990477801" TEXT="Para toda Entidade ser&#xe1; necess&#xe1;rio explicitar que a rela&#xe7;&#xe3;o &#xe9; Lazy" VSHIFT="43">
<node CREATED="1647990710473" HGAP="29" ID="ID_1663389282" MODIFIED="1647990725418" TEXT="Models &gt; &quot;NomeDoModelo&quot;" VSHIFT="30">
<node CREATED="1647990499602" HGAP="34" ID="ID_1064781265" MODIFIED="1647990707094" TEXT="Tal confirma&#xe7;&#xe3;o &#xe9; feita pelo modificador &quot;Virtual&quot; no Field" VSHIFT="45">
<node CREATED="1647990688943" MODIFIED="1647990688943">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_3297865589158037846.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1647990995194" HGAP="25" ID="ID_684109707" MODIFIED="1647991126240" VSHIFT="39">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      Para que N&#195;O seja criado um ciclo infinito de chamadas de Entidades
    </p>
    <p style="text-align: center">
      (um Cinema tem um Endere&#231;o, que tem um Cinema, ...)
    </p>
    <p style="text-align: center">
      
    </p>
    <p style="text-align: center">
      &#201; necess&#225;rio uma forma de dizer ao ORM (ao chamar um Cinema,
    </p>
    <p style="text-align: center">
      n&#227;o &#233; necess&#225;rio chamar os Cinemas do Endere&#231;o recebido)
    </p>
  </body>
</html></richcontent>
<node CREATED="1647991128910" HGAP="168" ID="ID_1524534050" MODIFIED="1647991368222" TEXT="1. A Propriedade [JsonIgnore] na Entidade que &#xe9; chamado dentro de outra" VSHIFT="-22">
<node CREATED="1647991338108" HGAP="141" ID="ID_249324401" MODIFIED="1647991344397" VSHIFT="31">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_6026560382191420140.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1648045371018" ID="ID_273588141" MODIFIED="1648045374359" TEXT="Criar Migrations">
<node CREATED="1648045393508" HGAP="54" ID="ID_851786409" MODIFIED="1648045464874" TEXT="Foreign Key" VSHIFT="-14">
<node CREATED="1648045407324" HGAP="46" ID="ID_412902272" MODIFIED="1648046077852" TEXT="&#xc9; importante entender se atualiza&#xe7;&#xf5;es ou dele&#xe7;&#xf5;es devem estar em Cascatas ou n&#xe3;o" VSHIFT="-37">
<node CREATED="1648045443342" HGAP="33" ID="ID_1952106307" MODIFIED="1648045469138" TEXT="ReferentialAction" VSHIFT="-8">
<node CREATED="1648045470013" HGAP="40" ID="ID_925060483" MODIFIED="1648045474764" TEXT="Cascade" VSHIFT="-12"/>
<node CREATED="1648045527656" HGAP="44" ID="ID_1125477598" MODIFIED="1648045532276" TEXT="NoAction" VSHIFT="-1"/>
<node CREATED="1648045548720" HGAP="45" ID="ID_1235851263" MODIFIED="1648045574900" TEXT="SetNull" VSHIFT="10"/>
<node CREATED="1648045550936" HGAP="43" ID="ID_1107457273" MODIFIED="1648045577164" TEXT="SetDefault" VSHIFT="11"/>
<node CREATED="1648045568290" HGAP="45" ID="ID_483961562" MODIFIED="1648045580644" TEXT="Restrict" VSHIFT="15"/>
</node>
<node CREATED="1648045661120" MODIFIED="1648045661120">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_1886441926058428735.jpeg" />
  </body>
</html></richcontent>
</node>
<node CREATED="1648045726086" HGAP="21" ID="ID_502253841" MODIFIED="1648045924755" VSHIFT="33">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      &#201; definido no <b><font color="#009933">OnModelCreating()</font></b>&#160;no <b>AppDbContext.cs</b>
    </p>
  </body>
</html></richcontent>
<node CREATED="1648045878470" MODIFIED="1648045878470">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_5869645156315749114.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1648046079041" HGAP="43" ID="ID_335837951" MODIFIED="1648046102664" TEXT="Entender se a FK ser&#xe1; necess&#xe1;ria para a exist&#xea;ncia da Entidade" VSHIFT="-4">
<node CREATED="1648046114700" ID="ID_315543276" MODIFIED="1648046236884" TEXT="Se sim, deixe como est&#xe1;" VSHIFT="-12">
<node CREATED="1648046187630" MODIFIED="1648046187630">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_7690611098593635424.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1648046120499" HGAP="19" ID="ID_559320614" MODIFIED="1648046234109" TEXT="Se n&#xe3;o, adicione a observa&#xe7;&#xe3;o" VSHIFT="22">
<node CREATED="1648046128748" HGAP="29" ID="ID_1277826796" MODIFIED="1648046164481" TEXT="builder.Entity&lt;&gt;.HasForeignKey.IsRequired(false)" VSHIFT="-11">
<node CREATED="1648046229578" MODIFIED="1648046229578">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_6846015522215940703.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1648236043832" HGAP="23" ID="ID_28333040" MODIFIED="1648236071303" POSITION="left" TEXT="IEnumerable&lt;&gt;">
<node CREATED="1648236049618" HGAP="24" ID="ID_474556295" MODIFIED="1648236072631" TEXT="Criar query" VSHIFT="-9">
<node CREATED="1648236054777" HGAP="44" ID="ID_1871895834" MODIFIED="1648236104635" TEXT="&#xc9; poss&#xed;vel criar queries parecidas com a de um Sql" VSHIFT="-41"/>
<node CREATED="1648236080146" ID="ID_1547921886" MODIFIED="1648236101971">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Selecionar apenas elementos com<br />&#160;subelementos com esta valida&#231;&#227;o
    </p>
  </body>
</html>
</richcontent>
<node CREATED="1648236137841" HGAP="55" ID="ID_631205480" MODIFIED="1648236142186" VSHIFT="9">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Conceitos_1018741801850701980.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
</node>
</node>
</map>
