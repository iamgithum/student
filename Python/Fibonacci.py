## Fibonacci Series
n = input("Enter a number: ")
i, a, b, c = 1, 1, 0, 0
while i < int(n):
    c = a + b
    print(c, sep=",", end=" ")
    a = b
    b = c
    i = i + 1
