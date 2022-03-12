## Fibonacci Series
n = input("Eneter a number: ")
i = 1
a = 1
b = 0
c = 0
while i < int(n):
    c = a + b
    print(c, sep=",", end=" ")
    a = b
    b = c
    i = i + 1
