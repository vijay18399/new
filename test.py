def doubler(string):
    result=[] 
    lst = string.split() #split string to list of words
    for i in lst:
        if lst.count(i)==2: #checking if particular word count is 2
            if i not in result: #check if it already stored in result=[]
                result.append(i) # append working having count exactly 2
    result.sort()  # sorting result list lexicographically
    if len(result)==0: #checking if there is no word having count equal to 2
        return -1
    else:
        return result[0] #return the lexically smallest
string=input()  #taking input from user
result = doubler(string) #computing and assigning to result
print(result) # printing result
