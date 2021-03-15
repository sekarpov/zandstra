Шаблон проектирования Factory Method
=========

В шаблоне `Factory Method` классы производителей (`BloggsCommsManager`, `MegaCommsManager`) отделены от продуктов, которые они должны формировать (`new BloggsApptEncoder()` , `new MegaApptEncoder()`). Производитель - это класс фабрики, в котором определен метод для формирования объектов отдельного продукта.

В отличии от прошлого примера, `CommsManager` теперь абстрактный. Таким образом мы сохраним гибкий суперкласс и разместим весь код, связанный с конкретным протоколом, в отдельных подклассах.

```php
abstract class CommsManager
{
    abstract public function getHeaderText(): string;
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getFooterText(): string;
}
```

```php
class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsCall верхний колонтитул" . PHP_EOL;
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCall нижний колонтитул" . PHP_EOL;
    }
}
```

```php
class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "MegaCall верхний колонтитул" .  PHP_EOL;
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getFooterText(): string
    {
        return "MegaCall нижний колонтитул" .  PHP_EOL;
    }
}
```
Некоторые программисты считают этот шаблон особым дублированием кода и поэтому часто испытывают к нему антипатию. Еще один недостаток в том, что шаблон `Factory Method` нередко способствует ненужной подклассификации.

Если же немного расширить этот пример, включив в него элементы заданий и контактов, то мы столкнемся с новой проблемой. Нам понадобится структура, которая должна одновременно обращаться с целым рядом связанных реализаций. Поэтому шаблон `Factory Method` нередко применяется вместе с шаблоном Abstract Factory.
