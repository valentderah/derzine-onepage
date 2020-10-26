<h4>
DerZine. Одностраничник.
</h4>

---

Так он выглядит на ПК
<img src="screenshots/1.png">
<img src="screenshots/2.png">

Так на мобильных устройствах
<img src="screenshots/3.png">

---

## Использование
1. Просто копипастите код
2. В файле index.php меняете:
$<?php $link_to_db = mysqli_connect('localhost','root','','data');
на
$<?php $link_to_db = mysqli_connect('#имя своего хоста','#имя пользователя бд','#пароль','имя бд');
3. Готово 