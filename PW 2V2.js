const n = parseInt(prompt("Введіть число n:"));

if (isNaN(n) || n < 2) {
    console.log("Будь ласка, введіть ціле число більше або рівне 2.");
} else {
    console.log(`Парні числа від 2 до ${n}:`);
    for (let i = 2; i <= n; i += 2) {
        console.log(i);
    }
}
