## 🔄 Como obter um palíndromo sem usar string?

**Resposta:** Revertendo as casas numéricas.

### Exemplo:
121 pode ser reescrito como:

```
100 + 20 + 1
= (1 * 10**2) + (2 * 10**1) + (1 * 10**0)
```

- 100 é 1 na casa das centenas  
- 20 é 2 na casa das dezenas  
- 1 é 1 na casa das unidades  

Revertendo:

- 1 da unidade vira da centena → 100  
- 2 da dezena continua → 20  
- 1 da centena vira da unidade → 1  

➡️ 121 é igual a 121 (é um palíndromo)

Outro exemplo:  
122 → 100 + 20 + 2  
Revertendo → 200 + 20 + 1 → **122 ≠ 221**

---

### 🔢 Deduções

Se dividimos por 10, obtemos a casa numérica.  
Como vamos do final para o início, precisamos também **multiplicar por 10** para inverter.

No código, usamos o **próprio número passado no argumento da função**, porque **não sabemos quantas vezes será necessário fazer a operação**.  
Usamos `while` como loop para a operação.

```
121 ÷ 10 → resto = 1, quociente = 12
12 ÷ 10 → resto = 2, quociente = 1
1 ÷ 10 → resto = 1, quociente = 0
```

- O resto representa o início da leitura reversa
- O quociente será usado no loop seguinte até zerar

---

Se fizermos apenas:
```python
reverso += x % 10
```
Não adiantará, pois vamos apenas somar os dígitos: `1 + 2 + 1 = 4`

### ✅ Solução correta:

A cada loop temos que acrescentar à casa numérica superior:

```text
x = 121, reverso = 0

Loop 1 → reverso = 0 * 10 + 1 → 1
Loop 2 → reverso = 1 * 10 + 2 → 12
Loop 3 → reverso = 12 * 10 + 1 → 121
```

**Fórmula:**

```python
reverso = reverso * 10 + x % 10
x //= 10
```

---

### 💡 Dicas úteis:

- Para obter quociente e resto ao mesmo tempo:
```python
q, r = divmod(x, 10)
```

- Use `while x > 0` para evitar negativos
- Todo número de 1 a 9 é palíndromo. um único loop será usado. Se 1=<x<=9, divmod(x, 10) -> (0, x)
- `while x` também funciona, mas `x > 0` é mais claro
