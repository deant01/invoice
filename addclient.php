<!DOCTYPE html>
<html>
<body>

<form action="action.php" method="post">
 <fieldset>
  <legend>Иформация за Клиент</legend>
   <p>Име на клиент: <input type="text" name="client_name" pattern="[^'\x22]+" title="Кавичките са забранени" required/></p>
   <p>Адрес:<input type="text" name="client_addr" pattern="[^'\x22]+" title="Кавичките са забранени" required/></p>
   <p>Телефон:<input type="number" name="client_tel"  required/></p>
   <p>БУЛСТАТ:<input type="text" name="client_bulstat" pattern="[0-9]{9}" title="Трябва да е деветцифрен код." required/></p>
   <p>ИД. Номер:<input type="text" name="client_idnum" pattern="[A-Z]{2}[0-9]{9}" title="Трябва да е деветцифрен код предхождан от две латински букви." required/></p>
   <p>МОЛ:<input type="text" name="client_mol" pattern="[^'\x22]+" title="Кавичките са забранени" required/></p>
   <p>Получател:<input type="text" name="client_get" pattern="[^'\x22]+" title="Кавичките са забранени" required/></p>
   <p><input type="submit"/><input type="reset"></p>
 </fieldset>
</form>

</body>
</html>

