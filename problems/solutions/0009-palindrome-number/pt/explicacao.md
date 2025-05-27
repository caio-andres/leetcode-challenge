Como se obter um palindromo sem usar string?
R = Revertendo as casas numéricas.
Exemplo:
121 pode ser reescrito como 100 + 20 + 1 ou (1*10^2)+(2*10^1) + (1*10^0)
-> 100 é 1 na casa das centenas
-> 20 é 2 na casa das dezenas
-> 1 é um na casa das unidades
Então, revertendo 
-> 1 da unidade vira da centena 100
-> 2 da dezena continua 20
-> 1 da centena vira da unidade 1
121 é igual a 121

122 -> 100 + 20 + 2
revertendo -> 200 + 20 + 1
122 é diferente de 221

Podemos deduzir se dividimos por 10 obtemos a casa numérica e como vamos do início para o final precisamos também multiplicar por 10.
No código, vamos usar o próprio número passado no argumento da função porque não sabemos quntas vezes serão necessárias fazer a operação.Usamos o while como loop para operação.
 121                    | 10
 1(resto)%(operador)      12(quociente) //(operador)

Então, precisamos do resto que representa o inicio o 1 de 121, o primeiro 1. E no loop seguinte usamos o quociente 12

12 | 10
1    2

O 2 representa o 20 de 121

1  | 10
1    0

O 1 representa 100 de 121, porque estamos lendo o inverso. 

O resto vai ser o numero que vamos adicionar a cada loop e quociente será nossa variavel que encerará o loop.
Se fizermos só reverso += x%10, não adiantará pq vamos só somar os digitos que resulta em 4(1+2+1)
A cada loop temos que acrescentar a casa numerica superior
121 e reverso=0
(1) Loop -> reverso += (10*0) + 1(resto ou %) 
(2)Loop -> reverso += (10*1) + 2(resto ou %)
(3)Loop -> reverso += (12*10) + 1

Escrevendo em código a lógica a cima para obter o numero invertido -> reverso += reverso*10 + x%10
Para guarda o quociente e para variavel do loop -> x //= 10

Observação: se quiser uma função que retorne o quociente e resto use divmod(x, 10) -> (x//10, x%10)
com "while x>0" elimina necessidade de colocar uma condicional para ver se é um número negativo
Outra Observação: todo numero entre 1 a 9 é palindromo. E vai ser feito um único loop porque se x estiver entre 1 e 9. divmod(x, 10) -> (0, x)
Poderia ser só "while x" mas como tem a condicional dos numeros não poderem ser negtivos usa-se "while x>0".
