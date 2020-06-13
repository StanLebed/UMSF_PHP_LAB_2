# UMSF_PHP_LAB_2
Беремо за основу попередню лабу, але в новому репозиторії.
Є масив в якому лежать користувачі, роль поставляємо випадковим чином:
$ Users = [
[ 'Name' => 'Василь', 'surname' => 'Лоханкин' 'login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru', 'role' => 'admin'],
[ 'Name' => 'Афанасій', 'surname' => 'Цукерберг' 'login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en', 'role' => client],
[ 'Login' => 'Petro', 'name' => 'Петро', 'surname' => 'Інкогніто', 'password' => 'EkUC42nzmu', 'lang' => 'ua', 'role' = > maneger],
[ 'Login' => 'Pedrolus', 'name' => 'Педро', 'surname' => 'Міланом', 'password' => 'Cogito_ergo_sum', 'lang' => 'it', 'role' = > 'client'],
[
'Login' => 'Sasha', 'name' => 'Олександр', 'surname' => 'Александров', 'password' => 'Ignorantia_non_excusat'],
];
Авторизацію робимо через сесії як я показував на лекції.
При авторизації в залежності від того який користувач увійшов, ми вітаємо його на ім'я і ролі, на всіх сторінках (робимо 2-3 штуки), на мові (російська, англійська, українська або італійська) в залежності від того який у нього мова вказана в нашому масиві.
Якщо у користувача немає мови, даємо йому вибір з мов і виводимо вітання на його мові (самі вирішите як це зробити зручніше для користувача).
Після авторизації користувач перебувати як би на "закритої території", тому всі спроби потрапити туди неавторизованих користувачем повинні натикатися на переадресацію на сторінку авторизації. А спроби авторизованого користувача зайти на сторінку авторизації, повинні переадресовувати користувача в його особистий кабінет.
Робимо 3 сторінки (файлу) які мають на увазі собою особистий кабінет:
admin.php
client.php
manager.php
Кожна зі сторінок доступна користувачу зі своєю роллю. Адміну доступні всі сторінки. Менеджеру всі сторінки крім адмінської частини. Клієнту тільки його сторінка. При вході на кожну зі сторінок перевіряємо права користувача перебувати на ній.
Якщо прав немає, то показуємо йому помилку 403. <? Php header ( 'HTTP / 1.0 403 Forbidden');?>,
якщо користувач не авторизований то переадресовуємо користувача на форму авторизації <? php header ( "Location: http://lab2.ua/login.php"); ?>



Разом у вас повинно вийти:
вхід під різними ролями з авторизацією через сесії
зміна мови всередині особистого кабінету
обмеження прав доступу в залежності від ролі, для різних сторінок
неможливість потрапити в особистий кабінет неавторизованого користувачеві (на наступній лабе будемо виводити туди секретну інформацію)
