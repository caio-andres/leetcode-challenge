class Solution:
    def isPalindrome(self, x: int) -> bool:
        reverso, numero = 0, x
        while x>0:
            reverso = reverso*10+x%10
            x//=10
        return reverso==numero
