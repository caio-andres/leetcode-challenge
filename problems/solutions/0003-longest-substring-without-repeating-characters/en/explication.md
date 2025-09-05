# 🔍 Explanation - Longest Substring Without Repeating Characters

This solution uses the **Sliding Window** technique combined with a **dictionary (`last`)** to efficiently find the **longest substring without repeating characters**.

---

## 🧠 Intuition

Instead of checking all possible substrings (**O(n²)**), we use two pointers (`left` and `right`) to maintain a **dynamic window** that **always contains unique characters**.

- As we iterate through the string with `right`, we expand the window.
- If we find a **repeated character** **inside the current window**, we move `left` to **just after its last occurrence**.
- We keep track of the maximum length (`best`) found so far.

This strategy ensures that each character is processed at most **once**, resulting in **O(n)** time complexity.

---

## 🧰 Algorithm Steps

1. Create a **dictionary `last`** to store the **last index** where each character appeared.
2. Initialize:
   - `left` → start of the current window.
   - `best` → maximum length found so far.
3. Iterate through the string using `right`:
   - If `s[right]` exists in `last` **and** `last[s[right]] >= left`:
     - Move `left` to `last[s[right]] + 1` to skip the duplicate.
   - Update `last[s[right]]` with the current index.
   - Calculate the current window size: `right - left + 1`.
   - Update `best` with the maximum length found so far.
4. Return `best` at the end.

---

## 💻 Step-by-Step Example: `"abnjba"`

| **Iteration** | **right** | **ch** | **left** | **last**                     | **Current Window** | **best** |
|--------------|-----------|--------|---------|------------------------------|--------------------|----------|
| 1 | 0 | a | 0 | {"a": 0} | `"a"` | 1 |
| 2 | 1 | b | 0 | {"a": 0, "b": 1} | `"ab"` | 2 |
| 3 | 2 | n | 0 | {"a": 0, "b": 1, "n": 2} | `"abn"` | 3 |
| 4 | 3 | j | 0 | {"a": 0, "b": 1, "n": 2, "j": 3} | `"abnj"` | 4 |
| 5 | 4 | b | **2** | {"a": 0, "b": 4, "n": 2, "j": 3} | `"njb"` | 4 |
| 6 | 5 | a | 2 | {"a": 5, "b": 4, "n": 2, "j": 3} | `"njba"` | 4 |

✅ **Longest substring without repetition:** `"abnj"`, `"njba"` or `"bnjb"`  
✅ **Final Result:** `best = 4`

---

## ⏱️ Complexity

- **Time Complexity:** `O(n)`  
  Each character is visited **once** at most.
- **Space Complexity:** `O(min(n, m))`  
  Where `m` is the number of unique possible characters.

---

## 🧼 Clean and Efficient

This approach avoids brute force and uses a **dictionary** to quickly find the previous occurrence of characters.  
It's more efficient than using a `Set` because we **don’t need to manually remove elements** — we just move `left` based on the stored last index.

---

## 📌 Final Code

```python
class Solution:
    def lengthOfLongestSubstring(self, s: str) -> int:
        last = {}      # char -> last seen index
        left = 0       # start of the window
        best = 0       # maximum length found

        for right, ch in enumerate(s):
            # If character already seen and is inside the current window
            if ch in last and last[ch] >= left:
                # Move the start of the window after the duplicate
                left = last[ch] + 1

            # Update the last seen index of the character
            last[ch] = right

            # Update the maximum length found so far
            best = max(best, right - left + 1)

        return best
```