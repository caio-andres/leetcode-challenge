# 🔍 Explicação - Substring Mais Longa Sem Caracteres Repetidos

Essa solução usa a técnica da **janela deslizante (Sliding Window)** junto com um **dicionário (`last`)** para encontrar de forma eficiente a **maior substring sem caracteres repetidos**.

---

## 🧠 Intuição

Em vez de verificar todas as substrings possíveis (**O(n²)**), usamos dois ponteiros (`left` e `right`) para manter uma **janela dinâmica** que **sempre contém caracteres únicos**.

- Conforme percorremos a string com `right`, expandimos a janela.
- Se encontrarmos um **caractere repetido** que está **dentro da janela**, movemos `left` para **logo após a última ocorrência** desse caractere.
- Mantemos atualizado o maior tamanho de substring (`best`) encontrado até agora.

Essa estratégia garante que cada caractere seja processado no máximo **uma vez**, resultando em um tempo de execução **O(n)**.

---

## 🧰 Passos do Algoritmo

1. Criar um **dicionário `last`** para armazenar o **último índice** em que cada caractere apareceu.
2. Inicializar:
   - `left` → início da janela.
   - `best` → comprimento máximo encontrado.
3. Percorrer a string com `right`:
   - Se `s[right]` já foi visto **e** `last[s[right]] >= left`:
     - **Mover o início da janela** (`left`) para `last[s[right]] + 1`.
   - Atualizar `last[s[right]]` com o índice atual.
   - Calcular o tamanho da janela: `right - left + 1`.
   - Atualizar `best` com o **máximo** encontrado.
4. Retornar `best` no final.

---

## 💻 Exemplo Passo a Passo: `"abnjba"`

| **Iteração** | **right** | **ch** | **left** | **last**                     | **Janela atual** | **best** |
|-------------|-----------|--------|---------|----------------------------|------------------|----------|
| 1 | 0 | a | 0 | {"a": 0} | `"a"` | 1 |
| 2 | 1 | b | 0 | {"a": 0, "b": 1} | `"ab"` | 2 |
| 3 | 2 | n | 0 | {"a": 0, "b": 1, "n": 2} | `"abn"` | 3 |
| 4 | 3 | j | 0 | {"a": 0, "b": 1, "n": 2, "j": 3} | `"abnj"` | 4 |
| 5 | 4 | b | **2** | {"a": 0, "b": 4, "n": 2, "j": 3} | `"njb"` | 4 |
| 6 | 5 | a | 2 | {"a": 5, "b": 4, "n": 2, "j": 3} | `"njba"` | 4 |

✅ **Maior substring sem repetição:** `"abnj"`, `"njba"` ou `"bnjb"`  
✅ **Resultado final:** `best = 4`

---

## ⏱️ Complexidade

- **Tempo:** `O(n)`  
  Cada caractere é visitado **uma vez**.
- **Espaço:** `O(min(n, m))`  
  Onde `m` é o número de caracteres distintos.

---

## 🧼 Limpo e Eficiente

Essa abordagem evita a força bruta e usa um **dicionário** para otimizar o cálculo do início da janela.  
É mais eficiente que usar `Set`, porque **não precisamos remover manualmente elementos** — basta mover `left` com base no último índice conhecido.

---

## 📌 Código Final

```python
class Solution:
    def lengthOfLongestSubstring(self, s: str) -> int:
        last = {}      # char -> último índice em que apareceu
        left = 0       # início da janela
        best = 0       # tamanho máximo encontrado

        for right, ch in enumerate(s):
            # Se o caractere já foi visto e está dentro da janela atual
            if ch in last and last[ch] >= left:
                # Move o início da janela para depois da última ocorrência
                left = last[ch] + 1

            # Atualiza o último índice do caractere
            last[ch] = right

            # Atualiza o tamanho máximo encontrado
            best = max(best, right - left + 1)

        return best
```