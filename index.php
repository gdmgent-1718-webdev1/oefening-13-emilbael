
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

th{
  background-color: lightblue;
  
}
td, th, tr{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 2px;
  width: 3.7rem;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
  <table>
    <tr>
      <th>Merk</th>
      <th>Stock</th>
      <th>Aantal verkocht</th>
      <th>Totaal aantal</th>
    </tr>
<?php
    $cars = [
        ['Volvo', 22, 18,40],
        ['BMW', 15, 13,28],
        ['Saab', 0, 5,5],
        ['Land Rover', 17, 15,32],
    ];
    sort($cars);
    print('<table>');
    for($i = 0; $i < count($cars); $i++) {
        print('<tr>');
        for($ii = 0; $ii < count($cars[$i]); $ii++) {
            print("<td>{$cars[$i][$ii]}</td>");
        }
        print('</tr>');
    }
    print('</table>');
?>
  
  
</body>
</html>