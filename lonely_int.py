## Given an array of integers, where all elements but one occur twice, find the unique element. 

a = [0, 0, 1, 2, 1]
i = 0
while i < len(a):
  if a.count(a[i]) == 1:
    ret = a[i]
  i = i + 1

return ret
