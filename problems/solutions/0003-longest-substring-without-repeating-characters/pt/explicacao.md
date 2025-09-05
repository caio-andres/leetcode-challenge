## 🔍 Explicação - Substring Mais Longa Sem Caracteres Repetidos

Usamos a técnica da **janela deslizante (Sliding Window)** para encontrar de forma eficiente a substring mais longa sem caracteres repetidos.

### 🧠 Intuição

Em vez de verificar todas as possíveis substrings (o que seria muito lento — O(n²)), mantemos o controle de uma **janela** de caracteres que são todos únicos.

À medida que percorremos a string, expandimos a janela para incluir novos caracteres. Se encontrarmos um caractere repetido, diminuímos a janela a partir da esquerda até que todos os caracteres sejam únicos novamente.

Essa abordagem garante que analisamos cada caractere apenas uma ou duas vezes — tornando o tempo de execução **linear**.

---

### 🧰 Passos do Algoritmo

1. Criar um `Set` para armazenar os caracteres atualmente na janela.
2. Usar dois ponteiros: `left` (início da janela) e `right` (fim da janela).
3. Percorrer a string com o ponteiro `right`:
   - Se `s[right]` **não** estiver no `Set`, adicioná-lo e atualizar o comprimento máximo.
   - Se `s[right]` **estiver** no `Set`, isso significa que há um caractere repetido, então:
     - Remover caracteres do `Set` a partir do ponteiro `left`,
     - Mover o ponteiro `left` para frente até que o caractere repetido seja removido.
4. Repetir até alcançar o final da string.
5. Retornar o maior comprimento encontrado.

---

### 💻 Exemplo Passo a Passo: `"pwwkew"`

Vamos percorrer a string:

- Começamos com a janela vazia, `max = 0`.
- Adicionamos `p` → sem repetição → janela = `"p"`, `max = 1`.
- Adicionamos `w` → sem repetição → janela = `"pw"`, `max = 2`.
- Adicionamos `w` novamente → repetição → encolher janela → remover `p`, depois `w`.
- Adicionamos `w` novamente → janela = `"w"`, `max` continua 2.
- Adicionamos `k` → janela = `"wk"`, `max = 2`.
- Adicionamos `e` → janela = `"wke"`, `max = 3`.
- Adicionamos `w` novamente → repetição → remover até eliminar duplicata → janela vira `"kew"`.

✅ Resultado final: comprimento máximo = **3**.

---

### ⏱️ Complexidade

- **Complexidade de Tempo:** O(n)  
  - Cada caractere é adicionado e removido do Set no máximo uma vez.
- **Complexidade de Espaço:** O(min(n, m))  
  - Onde `m` é o tamanho do conjunto de caracteres (por exemplo, 26 para letras minúsculas, ou mais se incluir símbolos).

---

### 🧼 Limpo e Eficiente

Essa solução evita o uso de força bruta e oferece uma forma limpa e eficiente de resolver o problema — é um ótimo exemplo de como a técnica de janela deslizante combinada com Sets pode ser poderosa na manipulação de strings.
