Шаблон проектирования ServiceLocator
=========

Запрашивание объектов у системы. (см. 281)

Класс `AppConfig` организует поиск и создание компонентов автоматически, и поэтому он служит характерным примером применения шаблона `Service Locator` (Определитель служб). Это изящный шаблон (подробнее о нем речь пойдет в главе 12, "Шаблоны корпоративным приложений"), хотя он и вносит зависимость в менее легкой форме, чем при непосредственной инициализации. В любых классах, где применяется столь монолитная служба, созданная по такому шаблону, приходится явным образом вызывать ее, что привязывает их к остальной системе в более обширном контексте. Именно поэтому некторые предпочитают выбрать другой подход.