<map version="1.0.1">
<!-- To view this file, download free mind mapping software FreeMind from http://freemind.sourceforge.net -->
<node CREATED="1646734319725" ID="ID_1812623760" MODIFIED="1647049549792" TEXT="MVC Webapp Anota&#xe7;&#xf5;es">
<node CREATED="1646735097846" HGAP="143" ID="ID_367789201" MODIFIED="1647048795520" POSITION="right" TEXT="Pacotes Adicionais" VSHIFT="98">
<node CREATED="1646735112117" HGAP="30" ID="ID_1312547242" MODIFIED="1647048796752" TEXT="Servidor HTTP" VSHIFT="37">
<node CREATED="1646735130965" HGAP="45" ID="ID_37305899" MODIFIED="1646735274410" VSHIFT="10">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Pacote: Microsoft.AspNet.Core
    </p>
    <p>
      Classe Servidor: IWebHost
    </p>
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1646735504938" ID="ID_1643542712" MODIFIED="1647048795521" POSITION="left" TEXT="Classes espec&#xed;ficas">
<node CREATED="1646735516603" HGAP="54" ID="ID_1274082170" MODIFIED="1647048796753" TEXT="Criar Servidor" VSHIFT="-19">
<node CREATED="1646735475545" HGAP="50" ID="ID_1774744139" MODIFIED="1647048797361" TEXT="IWebHost host = WebHostBuilder()" VSHIFT="-26">
<node CREATED="1646735526891" ID="ID_1682806032" MODIFIED="1646735533816" TEXT="UseKestrel()"/>
<node CREATED="1646735630502" ID="ID_1986508933" MODIFIED="1647048797875" TEXT="UseStartup&lt;Startup&gt;">
<node CREATED="1646735639870" HGAP="22" ID="ID_125591206" MODIFIED="1646735758056" VSHIFT="-19">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      (significa que a classe de configura&#231;&#227;o
    </p>
    <p style="text-align: center">
      do m&#233;todo estar&#225; em class Startup)
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1646735737521" ID="ID_1788312102" MODIFIED="1647048797933" TEXT="Criar m&#xe9;todo Configure() dentro da classe">
<node CREATED="1646736640720" HGAP="22" ID="ID_1935712105" MODIFIED="1646736729859" TEXT="Trata-se da &#xe1;rea Request-Pipeline" VSHIFT="-19"/>
<node CREATED="1646736678161" ID="ID_1274777296" MODIFIED="1646736731203" VSHIFT="13">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      O controlador j&#225; deve vir dentro do m&#233;todo.
    </p>
    <p>
      <b>IApplicationBuilder</b>&#160;<i>app</i>
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1646736908305" HGAP="19" ID="ID_1669530470" MODIFIED="1647048797993" VSHIFT="27">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Para devolver Respostas &#233; necess&#225;rio um m&#233;todo que devolva um <b>Task</b>
    </p>
  </body>
</html></richcontent>
<node CREATED="1646736957435" HGAP="30" ID="ID_660860046" MODIFIED="1646736966913" VSHIFT="10">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_8911204382922956151.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1646774041728" ID="ID_1556540460" MODIFIED="1647048797995" TEXT="Para definir rotas usa-se um Dicion&#xe1;rio">
<node CREATED="1646774135371" HGAP="105" ID="ID_949900713" MODIFIED="1647048798065" TEXT="Modo Manual" VSHIFT="-26">
<node CREATED="1646772869411" HGAP="35" ID="ID_1486704500" MODIFIED="1647048798146" TEXT="Criar dicion&#xe1;rio" VSHIFT="-89">
<node CREATED="1646772880065" HGAP="31" ID="ID_1225310013" MODIFIED="1647048798425" TEXT="new Dictionary&lt;string, int&gt;" VSHIFT="28">
<node CREATED="1646772889737" HGAP="18" ID="ID_1619123126" MODIFIED="1646772934151" TEXT="quer dizer que a chave ser&#xe1; do tipo STRING" VSHIFT="-14"/>
<node CREATED="1646772913962" HGAP="21" ID="ID_45717125" MODIFIED="1646772936728" TEXT="e o value ser&#xe1; do tipo INT" VSHIFT="11"/>
</node>
<node CREATED="1646773783353" HGAP="21" ID="ID_947175413" MODIFIED="1647048798426" TEXT="Verificar se existe valor com Chave no Dic" VSHIFT="23">
<node CREATED="1646773797497" HGAP="23" ID="ID_1476382898" MODIFIED="1646773849980" VSHIFT="-17">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      if (<b>dictionary.containsKey()</b>)
    </p>
    <p>
      { }
    </p>
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1646774082497" HGAP="32" ID="ID_1964156230" MODIFIED="1647048798148" TEXT="Para caminhos inexistentes" VSHIFT="-8">
<node CREATED="1646774112882" HGAP="21" ID="ID_379096931" MODIFIED="1646774132166" TEXT="pode ser definido manualmente" VSHIFT="-12"/>
<node CREATED="1646774098338" HGAP="23" ID="ID_863594747" MODIFIED="1646774130415" TEXT="context.Reponse.StatusCode = 404;" VSHIFT="10"/>
</node>
<node CREATED="1646774292833" HGAP="29" ID="ID_662829643" MODIFIED="1646774296489" VSHIFT="55">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_960121951817321730.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
<node CREATED="1646786556570" ID="ID_1728151674" MODIFIED="1647048798067" TEXT="Modo Correto">
<node CREATED="1646786564438" HGAP="47" ID="ID_1929602299" MODIFIED="1647048798154" TEXT="new RouteBuilder(app)" VSHIFT="45">
<node CREATED="1646786586778" HGAP="29" ID="ID_218492825" MODIFIED="1646786673815" VSHIFT="4">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_1498551875645755486.jpeg" />
  </body>
</html></richcontent>
</node>
<node CREATED="1646786604327" ID="ID_1711246866" MODIFIED="1646786667495" TEXT="builder.MapRoute(&quot;rota&quot;, this.m&#xe9;todo)" VSHIFT="31"/>
<node CREATED="1646786645231" HGAP="21" ID="ID_262444095" MODIFIED="1646786665406" TEXT="var rotas = builder.Build();" VSHIFT="34"/>
<node CREATED="1646786634287" HGAP="22" ID="ID_395654406" MODIFIED="1646786663951" TEXT="app.UseRouter(rotas)" VSHIFT="24"/>
</node>
<node CREATED="1646786764532" HGAP="26" ID="ID_1064653171" MODIFIED="1647048798158" TEXT="Rotas com Template" VSHIFT="110">
<node CREATED="1646786772836" HGAP="24" ID="ID_1738095651" MODIFIED="1646786809334" TEXT="Permite URLs complexas e individuais a partir do mesmo controlador" VSHIFT="-27"/>
<node CREATED="1646786810534" HGAP="30" ID="ID_1594475206" MODIFIED="1646786836306" TEXT="&quot;/Cadastro/NovoLivro/{nome}/{autor}" VSHIFT="6"/>
<node CREATED="1646786839999" HGAP="31" ID="ID_44906858" MODIFIED="1646787125259" VSHIFT="28">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      Para ter acesso, usa-se o m&#233;todo de CONTEXT
    </p>
    <p style="text-align: center">
      <b>context.GetRouteValue(&quot;key&quot;)</b>
    </p>
  </body>
</html></richcontent>
</node>
<node CREATED="1646788088409" HGAP="29" ID="ID_356386946" MODIFIED="1647048798429" VSHIFT="20">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      Para melhorar confiabilidade pode-se usar
    </p>
    <p style="text-align: center">
      <b>Route Constraints </b>
    </p>
    <p style="text-align: center">
      para definir o tipo de informa&#231;&#227;o que se deve aceitar
    </p>
    <p style="text-align: center">
      em cada par&#226;metro
    </p>
  </body>
</html></richcontent>
<node CREATED="1646788224362" HGAP="48" ID="ID_1983093767" MODIFIED="1646788228921" VSHIFT="40">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_7682509763588001177.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
<node CREATED="1646798928138" HGAP="32" ID="ID_1368455290" MODIFIED="1647048798167" TEXT="Receber Informa&#xe7;&#xf5;es da Query na URL" VSHIFT="181">
<node CREATED="1646817559532" HGAP="46" ID="ID_1374728072" MODIFIED="1647048798430" TEXT="m&#xe9;todo GET" VSHIFT="-31">
<node CREATED="1646798941062" HGAP="49" ID="ID_681321434" MODIFIED="1646798965554" TEXT="context.Request.Query[&quot;key&quot;]" VSHIFT="-26"/>
</node>
<node CREATED="1646817570245" HGAP="47" ID="ID_358253769" MODIFIED="1647048798430" TEXT="m&#xe9;todo POST" VSHIFT="45">
<node CREATED="1646817577693" HGAP="46" ID="ID_1489345470" MODIFIED="1646817589425" TEXT="context.Request.Form[&quot;key&quot;]" VSHIFT="19"/>
</node>
<node CREATED="1646824667489" HGAP="39" ID="ID_1408979466" MODIFIED="1646824672162" VSHIFT="63">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_8070298659759014623.jpeg" />
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1646736462666" HGAP="18" ID="ID_795341136" MODIFIED="1646736734804" VSHIFT="16">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Toda informa&#231;&#227;o HTTP est&#225; dentro da vari&#225;vel
    </p>
    <p>
      <b>HttpContext </b><i>contexto</i>
    </p>
  </body>
</html></richcontent>
</node>
</node>
</node>
</node>
</node>
<node CREATED="1647048147428" HGAP="122" ID="ID_612541691" MODIFIED="1647048795523" POSITION="right" TEXT="Padr&#xe3;o MVC na aplica&#xe7;&#xe3;o" VSHIFT="234">
<node CREATED="1647048163587" HGAP="36" ID="ID_860718916" MODIFIED="1647048796759" TEXT="Model" VSHIFT="-111">
<node CREATED="1647048187387" HGAP="63" ID="ID_1511010853" MODIFIED="1647048463906" TEXT="Respons&#xe1;vel pelas Entidades do projeto" VSHIFT="-33"/>
<node CREATED="1647048457707" HGAP="33" ID="ID_1862540690" MODIFIED="1647048460665" VSHIFT="42">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_8592296432123169873.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647048166783" HGAP="58" ID="ID_1468279759" MODIFIED="1647048796763" TEXT="View" VSHIFT="28">
<node CREATED="1647048223653" HGAP="57" ID="ID_144261751" MODIFIED="1647048397672" TEXT="Respons&#xe1;vel pelo HTML da p&#xe1;gina" VSHIFT="-23"/>
<node CREATED="1647048391732" HGAP="39" ID="ID_1948534479" MODIFIED="1647048405025" VSHIFT="16">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_4292480237147761579.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647048168626" HGAP="38" ID="ID_1974141380" MODIFIED="1647048796768" TEXT="Controller" VSHIFT="130">
<node CREATED="1647048234237" HGAP="62" ID="ID_1610472726" MODIFIED="1647048363850" VSHIFT="28">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <p style="text-align: center">
      Respons&#225;vel pela l&#243;gica do sistema
    </p>
    <p style="text-align: center">
      (aten&#231;&#227;o, o ROTEAMENTO &#233; t&#227;o b&#225;sico que
    </p>
    <p style="text-align: center">
      nem &#233; considerado um controller)
    </p>
  </body>
</html>
</richcontent>
</node>
<node CREATED="1647048356112" HGAP="18" ID="ID_712635470" MODIFIED="1647048359226" VSHIFT="66">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_5916883477090963844.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647048479014" HGAP="37" ID="ID_1527097931" MODIFIED="1647048796770" TEXT="Dados da Aplica&#xe7;&#xe3;o" VSHIFT="171">
<node CREATED="1647048502854" HGAP="21" ID="ID_1329635858" MODIFIED="1647048797366" TEXT="Roteamento" VSHIFT="-21">
<node CREATED="1647048678051" HGAP="43" ID="ID_319399520" MODIFIED="1647048712754" TEXT="Rotas e chamadas da aplica&#xe7;&#xe3;o" VSHIFT="-52"/>
<node CREATED="1647048708385" MODIFIED="1647048708385">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_6120541660792906672.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647048505638" ID="ID_1575452631" MODIFIED="1647048797371" TEXT="Dados">
<node CREATED="1647048510447" HGAP="27" ID="ID_1673987920" MODIFIED="1647048634237" TEXT="Est&#xe3;o diretamente no projeto e possuem uma forma de acess&#xe1;-los,&#xa;mas poderiam estar num database e serem buscados por um ORM" VSHIFT="-26"/>
<node CREATED="1647048666566" MODIFIED="1647048666566">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_436266001434157908.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
<node CREATED="1647048597281" ID="ID_1118919287" MODIFIED="1647048797376" TEXT="Motor im&#xf3;vel" VSHIFT="30">
<node CREATED="1647048602273" HGAP="25" ID="ID_1054477140" MODIFIED="1647048637110" TEXT="Aquele que &quot;starta&quot; toda a aplica&#xe7;&#xe3;o, o componente mais ligado a uma programa&#xe7;&#xe3;o Funcional" VSHIFT="-23"/>
<node CREATED="1647048774543" MODIFIED="1647048774543">
<richcontent TYPE="NODE"><html>
  <head>
    
  </head>
  <body>
    <img src="Anota&#xe7;&#xf5;es e Aprendizados_7668027729402732804.jpeg" />
  </body>
</html>
</richcontent>
</node>
</node>
</node>
</node>
</node>
</map>
