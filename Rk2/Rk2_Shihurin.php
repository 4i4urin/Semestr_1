<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RK 2</title>
  </head>
  <body>
    <h1>Шишурин Александр ИУ4-12Б</h1>
    <h2>Вариант 3</h2>
    <form  action="" method="post">
      <p>Введите число <input type="text" name="ch"></p>
      <input type="radio" name="sp" value="возвести в квадрат">возвести в квадрат <br>
      <input type="radio" name="sp" value="возвести в куб">возвести в куб <br>
      <input type="radio" name="sp" value="взять корень">взять корень <br>
      <input type="submit" name="подтвердить">
    </form>
  </body>
</html>
<?php
echo "задание 1", "<br>";
for ($i=1; $i < 11 ; $i++) {
  for ($m=1; $m < 11 ; $m++) {
    if ($m == 10) {
      echo $i*$m, "<br>";
    }
    else {
      echo $i*$m, " ";.
    }
  }
}
echo "задание 2", "<br>";
$t = $POST['ch'];
if ($POST['sp'] === 'возвести в квадрат') {
  echo $t*$t, " ";
} elseif ($POST['sp'] === 'возвести в куб') {
  echo $t*$t*$t, " ";
} else {
  echo sqrt($t);
}
 ?>
