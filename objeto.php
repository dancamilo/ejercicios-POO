?<php 

require_oce("empleado.php");
   $objEmpl = new Empleado('pepito','perez', 30);

   echo $objEmpl->getFirtsName();//
   echo $objEmpl->getLastName();//
   echo $objEmpl->getAge();//
   ?>