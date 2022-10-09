def profit(arr):
    min = arr[0]
    highest = 0
    sell=0
    for i in range(len(arr)):
        if arr[i]>highest:
            highest = arr[i]
        if arr[i]<min:
            min = arr[i]
            highest = min
        sell = highest - min
    print(sell)
arr = [7,1,5,7,3,6,4]
profit(arr)