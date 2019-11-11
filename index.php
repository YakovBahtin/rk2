<doctype=!HTML>
<html>
<head></head>
<body>
<h3>Бахтин Яков Вариант 2</h3>





<h2>Task 1</h2>
<?php<table>WHILE($q=0;$q++<101) {echo "<tr>"; WHILE($w=0;$w++<101) {echo "<td>", $q ,-, $w, "</td>"}; echo"</tr>"};</table>
?>





<h2>Task 2</h2>

<form method="POST">
<input type="number" name="x1" value="Введи число">
<input type="number" name="x2" value-"ВВеди другое число">
<select name="tip">
<option name="sum">Найти сумму чисел</option>
<option name="raz">Найти разность чисел</option>
<option name="mul">Найти произведение чисел</option>
<option name="div">Найти частное чисел</option>
</select>
</form>
<?php
if ($_POST[tip]==sum) {echo $_POST[x1]+$_POST[x2]};
if ($_POST[tip]==raz) {echo $_POST[x1]*$_POST[x2]};
if ($_POST[tip]==mul) {echo $_POST[x1]-$_POST[x2]};
if ($_POST[tip]==div) {echo $_POST[x1]/$_POST[x2]};
?>
</body>
</html>
