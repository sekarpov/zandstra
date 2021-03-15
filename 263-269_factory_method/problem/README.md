Какую проблему решает шаблон Factory Method
================

## Задача.

Есть объект типа `Appointment`, представляющая встречу . Нам поручено передать информацию другой компании о встрече в формате `BloggsCall`. Но нас предупредили, что со временем могут понадобиться и другие форматы.

## Решение без шаблона.

Создаем абстрактный класс `ApptEncoder` - общий тип кодировщика. И `CommsManager` - управляющий класс, который будет производить поиск кодировщика.

Сами кодировщики - `BloggsApptEncoder` и `MegaApptEncoder` (со временми их может стать больше).

В качестве флажков, определяющих два режима, в которых может работать сценарий, мы используем константы класса `CommsManager::MEGA` и `BLOGGS`.

Клиентский код.

```php
$man = new CommsManager(CommsManager::MEGA);
print (get_class($man->getApptEncoder())) . "\n";

$man = new CommsManager(CommsManager::BLOGGS);
print (get_class($man->getApptEncoder())) . "\n";
```

Описанный ниже пример не совсем удачен. Использование Условных операторов иногда считается дурным тоном и признаком недоброкачественного кода.

```php
public function getApptEncoder(): ApptEncoder
{
    switch ($this->mode) {
        case (self::MEGA) :
            return new MegaApptEncoder();
        default:
            return new BloggsApptEncoder();
    }
}
```

Допустим, что в используемых нами протоколах требуется вывести данные в верхнем и нижнем колонтитулах. Это вынудит нас продублировать проверку типа протокола с помощью оператора `switch` уже в методах `getHeaderText()` и `getFooterText()`.

```php
public function getHeaderText(): string
{
    switch ($this->mode) {
        case (self::MEGA):
            return "MegaCall верхний колонтитул" .  PHP_EOL;
        default:
            return "BloggsCall верхний колонтитул" .  PHP_EOL;
    }
}

public function getFooterText(): string
{
    switch ($this->mode) {
        case (self::MEGA):
            return "MegaCall нижний колонтитул \n\n";
        default:
            return "BloggsCall нижний колонтитул \n\n";
    }
}
```
В данном случае употребляются условные операторы, но их можно заменить полиморфизмом. Шаблон `Factory Method` позволяет применять наследование и полиморфизм, чтобы инкапсулировать создание конкретных продуктов. Иными словами, для каждого протокола создается свой подкласс типа CommsManager, в котором реализован свой метод getApptEncoder().

