function findLongestWord(sentence) {
    const words = sentence.split(' ');
    let longestWord = '';
    for (let word of words) {
      if (word.length > longestWord.length) {
        longestWord = word;
      }
    }
    return longestWord;
  }
  var sentenc = prompt("Введите предложение:");

  console.log(findLongestWord(sentenc)); 
  