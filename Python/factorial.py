# CodeByte
def FirstFactorial(num):

  # code goes here
  i, o = int(num), 1
  while 1 <= i:
    o = o * i
    i = i - 1
  return o

# keep this function call here 
print(FirstFactorial(input()))
