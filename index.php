<?
//создаем или открываем базу данных
$db = new SQLite3("test.db");

// //закрыть бд
// $db->close();
// //открыть бд
// $db->open("test.db");
// //удалить бд
// unset($db);

//создание таблицы бд
//$create = $db->exec("CREATE TABLE users(id INTEGER PRIMARY KEY AUTOINCREMENT,name)");

//добавление строки
//$insert = $db->exec("INSERT INTO users(name) VALUES ('Ivan')");

//изменение значения
//$update = $db->exec("UPDATE users SET name = 'Nikita' WHERE id = 1");

//удаление строки
//$delete = $db->exec("DELETE FROM users WHERE id = 2");

//выбор значений
$select = $db->query("SELECT * FROM users");

while ($row = $select->fetchArray(SQLITE3_ASSOC)) {
    print_r($row);
}
