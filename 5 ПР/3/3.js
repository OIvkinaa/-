function isPrime(num) {
    if (num < 2) {
      return false;
    }
    for (let i = 2; i <= Math.sqrt(num); i++) {
      if (num % i === 0) {
        return false;
      }
    }
    return true;
  }
  
  function sumOfDigits(num) {
    let sum = 0;
    while (num > 0) {
      sum += num % 10;
      num = Math.floor(num / 10);
    }
    return sum;
  }
  
  function removeElements(arr) {
    return arr.filter((num) => {
      const integerPart = Math.floor(num);
      const digitSum = sumOfDigits(Math.abs(integerPart));
      return !isPrime(digitSum);
    });
  }
  
  const array = [15, 27, -38, 41, 53, -64];
  const newArray = removeElements(array);
  console.log(newArray);