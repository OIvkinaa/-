function isDateValid(day, month, year) {
  if (year < 0 || year > 9999) {
    return false;
  }
  if (month < 1 || month > 12) {
    return false;
  }
  if (day < 1 || day > 31) {
    return false;
  }

 
  const maxDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
  

  if (year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0)) {
    maxDays[1] = 29;
  }

  if (day > maxDays[month - 1]) {
    return false;
  }

  return true;
}

const day = parseInt(prompt("Введите день:"));
const month = parseInt(prompt("Введите месяц:"));
const year = parseInt(prompt("Введите год:"));

if (isDateValid(day, month, year)) {
  console.log(day + "." + month + "." + year + " - Дата корректна");
} else {
  console.log(day + "." + month + "." + year + " - Дата некорректна");
}
