\n : new line   ---- pode ser trocado pelo PHP_EOL (php end of line)
\t : horizontal TAB
\v : vertical TAB
\e : escape 
\f : form feed 
\\ : backslash
\$ : dolar sign 
\" : double-quote 

\x[hexadecimal] : hexadecimal
\u[unicode] : unicode



........................................................................... 



|| tem o mesmo valor que OR em comparações

($idade > 18 || $idade == 18) {}



&& tem o mesmo valor que AND em comparações

($idade > 18 && $nome == 'Mateus') {}



........................................................................... 



Else if : funciona tal como ELIF



........................................................................... 



for($i = 0; $i <= 1000; ++$i) {}



........................................................................... 



while ($contador < 15 + 1) {
    echo "# $contador" . PHP_EOL;
    $contador = ++$contador;
}



........................................................................... 



$contador += 1

    → $contador = $contador + 1


















