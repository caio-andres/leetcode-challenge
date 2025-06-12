# 3753. Maximum Difference Between Even and Odd Frequency I (Fácil)

Você recebe uma string `s`, consistindo em letras inglesas em minúsculas.

Sua tarefa é encontrar a ** diferença máxima ** `diff = freq (a1) - freq (a2)`
entre a frequência dos caracteres `a1` e` a2` na string tal que:

*`A1` tem uma frequência ** ímpar ** na string.
*`A2` tem uma frequência ** uniforme ** na string.

Retorne esta ** diferença máxima **.

## Exemplo 1:

Entrada: s = "aaaaabbc"

Saída: 3

Explicação:

*O caractere `'A'` tem uma frequência ímpar ** de` 5`, e `' B '' tem uma frequência uniforme ** de` 2 '.
* A diferença máxima é `5 - 2 = 3`.

## Exemplo 2:

Entrada: s = "abcabcab"

Saída: 1

Explicação:

*O caractere `'A'` tem uma frequência ímpar ** de` 3`, e `' c''tem uma frequência uniforme ** de 2.
* A diferença máxima é `3 - 2 = 1`.

## restrições

* `3 <= S.Length <= 100`
* `s` consiste apenas em letras inglesas em minúsculas.
* `s` contém pelo menos um caractere com uma frequência ímpar e um com uma frequência uniforme.
