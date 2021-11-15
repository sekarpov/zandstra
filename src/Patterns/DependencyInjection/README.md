Шаблон проектирования DependencyInjection
=========

Наделение системы полномочиями предоставлять объекты. (см. 285)

Каким образом действует логика создания объектов и где находится внушающие трепет операторы `new`? Для выполнения создания объектов и вызова оператора `new` потребуется компонент-сборщик. Как правило, с этой целью применяется файл конфигурации, где определяются конкретные реализации для получения экземпляров.
Если вы собираетесь создать сборщик/контейнер по шаблону DependencyInjection, рассмотрите следующие возможные средства: `Pimple` и `Symfony DI`.