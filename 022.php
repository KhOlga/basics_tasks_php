<?php

#22. Приведите число -20 к типу boolean. Объясните результат.

$a = -20;
var_dump((bool) $a);

/*При приведенні в boolean по замовчуванню значенню false дорівнюється наступне:
    - значення false,
    - integer 0,
    - float 0.0,
    - пуста строка,
    - строка "0",
    - масив без елементів,
    - тип NULL.
    Всі інші значення при приведенні в boolean дорівнюються true.
*/
