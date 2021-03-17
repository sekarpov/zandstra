Шаблон проектирования Abstract Factory
=========

В крупных приложениях могут понадобиться фабрики, формирующие связанные вместе совокупности классов. И эту проблему позволяет решить шаблон `Abstract Factory` (Абстрактная Фабрика).

Задача добавить кодировщики данных для разных типов объектов личного дневника. Информация о встречах (Appt), о заданиях (Ttd, Think To Do) и о контактах(Contact).

Нужно вызвать такой код:

```php
$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getTtdEncoder()->encode();
print $mgr->getContactEncoder()->encode();
print $mgr->getFooterText();

$mgr = new MegaCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getTtdEncoder()->encode();
print $mgr->getContactEncoder()->encode();
print $mgr->getFooterText();
```
И получить такой результат
```
BloggsCall верхний колонтитул
Данные о встрече закодированы в формате BloggsCall
Данные о задании (Think To Do) закодированы в формате BloggsCall
Данные о контактах закодированы в формате BloggsCall
BloggsCall нижний колонтитул

MegaCall верхний колонтитул
Данные о встрече закодированы в формате MegaCall
Данные о заданиях закодированы MegaCall
Данные о контактах закодированы в формате MegaCall
MegaCall нижний колонтитул
```