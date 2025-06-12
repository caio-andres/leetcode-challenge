class Solution:
    def maxDifference(self, s: str) -> int:
        d = {}
        par, impar = 0, 0
        for i in s:
            if i not in d:
                d[i] = 1
            else:
                d[i] += 1

        for tmp in d.values():
            if tmp % 2:
                if not impar or tmp > impar:
                    impar = tmp

            else:
                if not par or tmp < par:
                    par = tmp
        return impar - par
