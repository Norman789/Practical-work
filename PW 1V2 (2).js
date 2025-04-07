const a = parseFloat(prompt("Введіть перше число:"));
const b = parseFloat(prompt("Введіть друге число:"));
const c = parseFloat(prompt("Введіть третє число:"));

const average = (a + b + c) / 3;
console.log(`Середнє арифметичне: ${average}`);

console.log(`Модулі чисел: ${Math.abs(a)}, ${Math.abs(b)}, ${Math.abs(c)}`);
console.log(`Округлення в більшу сторону: ${Math.ceil(a)}, ${Math.ceil(b)}, ${Math.ceil(c)}`);
console.log(`Округлення в меншу сторону: ${Math.floor(a)}, ${Math.floor(b)}, ${Math.floor(c)}`);
console.log(`Числа в квадраті: ${a ** 2}, ${b ** 2}, ${c ** 2}`);

const divisor = 5; // Ви можете змінити на інше число
console.log(`Число ${a} ділиться на ${divisor}: ${a % divisor === 0}`);
console.log(`Число ${b} ділиться на ${divisor}: ${b % divisor === 0}`);
console.log(`Число ${c} ділиться на ${divisor}: ${c % divisor === 0}`);

if (a + b > c && a + c > b && b + c > a) {
    console.log("Трикутник з такими сторонами може існувати.");
} else {
    console.log("Трикутник з такими сторонами не може існувати.");
}
