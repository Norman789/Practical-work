<?php

#[Attribute]
class ValidatePassword {
    public static int $failCount = 0;

    public static function logFailure() {
        self::$failCount++;
    }
}

#[Attribute]
class Validator {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function logUsage() {
        echo "<p>Валідатор '{$this->name}' було використано</p>";
    }
}

function generatePassword(int $length): string {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $password = '';
    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $maxIndex)];
    }

    return $password;
}

#[Validator(name: "strength_check")]
function isStrongPassword(string $password): bool {
    $validator = new Validator("strength_check");
    $validator->logUsage();

    return preg_match('/[A-Z]/', $password) && 
           preg_match('/\d/', $password) &&   
           strlen($password) >= 8;
}

#[ValidatePassword]
function generateValidPassword(int $length, callable $callback): string {
    do {
        $password = generatePassword($length);
        if (!$callback($password)) {
            ValidatePassword::logFailure();
        }
    } while (!$callback($password));

    return $password;
}

// HTML-форма
echo '<form method="post">
        <label>Кількість паролів:</label>
        <input type="number" name="count" required><br>
        <label>Довжина паролю:</label>
        <input type="number" name="length" required><br>
        <input type="submit" value="Генерувати">
      </form>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $count = intval($_POST["count"]);
    $length = intval($_POST["length"]);

    echo "<h3>Згенеровані паролі:</h3><ul>";
    for ($i = 0; $i < $count; $i++) {
        echo "<li>" . generateValidPassword($length, 'isStrongPassword') . "</li>";
    }
    echo "</ul>";
    echo "<p>Невдалих спроб генерації: <strong>" . ValidatePassword::$failCount . "</strong></p>";
}
?>
