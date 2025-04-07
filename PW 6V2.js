// Функція getRandomNumber(), яка повертає проміс через 1 секунду
function getRandomNumber() {
    return new Promise((resolve) => {
        setTimeout(() => {
            const randomNumber = Math.floor(Math.random() * 100) + 1; // Випадкове число (1-100)
            resolve(randomNumber);
        }, 1000);
    });
}

// Async функція processNumber()
async function processNumber() {
    try {
        const number = await getRandomNumber();
        console.log(`Отримане число: ${number}`);

        if (number < 50) {
            const increasedNumber = await Promise.resolve(number + 20);
            console.log(`Число збільшено на 20: ${increasedNumber}`);
        } else {
            await Promise.reject("Занадто велике число!");
        }
    } catch (error) {
        console.log(`Оброблено помилку: ${error}`);
    }
}

// Викликаємо функцію та виводимо результат у консоль
processNumber();
