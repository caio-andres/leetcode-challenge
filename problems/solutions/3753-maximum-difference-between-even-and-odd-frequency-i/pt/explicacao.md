*Máxima diferença entre ocorrências impares e ocorrências pares*
<br>
Então, a cadeia de caracteres será percorrida e armazenada a ocorrência dos caracteres dentro da cadeia.
Se o problema pede máxima diferença, então se encontrarmos o maior número impar e o menor numero par, tambem, encontramos a solução.
<br>
diferença = (maior ímpar) - (menor par).
<br>
Para guardar números de frequência de um caractere pode ser usado objetos ou funções para isso, mas optei por usar um loop para guardar as frequências como valor de uma chave, que é caractere.
Essa estrutura, em Python é o dict() ou {} e no PHP [] ou array(), que é chamado de array associativo.
<br>
E um segundo loop para encontar o numero par e o numero ímpar.
<br>
Observação: no Editorial, usa-se Counter e funções max e min em Python.
