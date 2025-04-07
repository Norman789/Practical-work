// Створення масиву об'єктів
const users = [
    { name: "Олександр", age: 25 },
    { name: "Марія", age: 17 },
    { name: "Іван", age: 30 },
    { name: "Анна", age: 16 },
    { name: "Петро", age: 22 }
];

// Фільтрація користувачів, яким більше 18 років
const adults = users.filter(user => user.age > 18);
console.log("Користувачі старше 18 років:", adults);

// Створення масиву, що містить лише імена користувачів
const names = users.map(user => user.name);
console.log("Імена користувачів:", names);

// Обчислення середнього віку користувачів
const totalAge = users.reduce((sum, user) => sum + user.age, 0);
const averageAge = totalAge / users.length;
console.log("Середній вік користувачів:", averageAge.toFixed(2));

// Вивід результатів
console.log("Масив користувачів:", users);
console.log("Середній вік:", averageAge.toFixed(2));
console.log("Імена:", names);
console.log("Дорослі:", adults);
