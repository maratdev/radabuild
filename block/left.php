<?
$result2 = mysql_query("SELECT * FROM categoriya",$db);
if (!$result2)
{
    echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@ruseller.com. <br> <strong>Код ошибки:</strong></p>";
    exit(mysql_error());
}

if (mysql_num_rows($result2) > 0)
{
    $myrow2 = mysql_fetch_array($result2);
    do
    {
        printf ("<li>
                <h2 class='post-title'><a href='view_cat.php?cat=%s'>%s </a></h2>
                </li>",$myrow2["id"],$myrow2["title"]);
    }
    while ($myrow2 = mysql_fetch_array($result2));
}

else
{
    echo "<p>Информация по запросу не может быть извлечена в таблице нет записей.</p>";
    exit();
}
?>

<?//
//$result = mysql_query ("SELECT categories, id, title FROM page",$db);
//$myrow = mysql_fetch_array ($result);
//do {
//    printf ("
//									<li><span class='post-category'><a href='#'>%s</a></span>
//									<h2 class='post-title'><a href='production_view.php?id=%s'>%s </a></h2>
//									</li>",$myrow["categories"],$myrow["id"],$myrow["title"]);
//}
//while ($myrow = mysql_fetch_array ($result));
//?>
