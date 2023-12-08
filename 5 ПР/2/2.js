function calculateSum(arr, e) {
    let firstIndex = -1;
    let lastIndex = -1;
  
    for (let i = 0; i < arr.length; i++) {
      if (Math.abs(arr[i] - e) <= 0.00001) {
        if (firstIndex === -1) {
          firstIndex = i;
        }
        lastIndex = i;
      }
    }

    if (firstIndex === -1) {
      return 0;
    }
  
    let sum = 0;
  
    for (let i = firstIndex + 1; i < lastIndex; i++) {
      sum += arr[i];
    }
  
    return sum;
}
console.log(calculateSum([1, 2, 3, 4, 5], 3));