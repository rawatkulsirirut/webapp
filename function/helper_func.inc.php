<?php

spl_autoload_register(function ($class_name) {
    require_once "class/" . $class_name . ".class.php";
});

    function sum($sum,$price){
     $b=$sum;
     $a=array();
     $j=0;
     $c=0;

        while($j<sizeof($b)) 
       {
         if($sum[$j]>0)
         {
           $c+=$sum[$j]*$price[$j];
         }
         $j++;

       }

       $a[0]=$c;
       $a[1]=$c*0.07;
       $a[2]=$c*1.07;
     return($a);
    }


  function table($conn,$products,$units,$thead)
    {
        echo "<table cellspacing = '0' width='50%'>";
          echo " <thead>";
             echo " <tr>";
                for ($i = 0; $i < sizeof($thead); $i++) 
                {
                   echo "<th  style='text-align: center;'>{$thead[$i]}</th>";
                }
          
             echo "</tr>";

          echo "</thead>";
          echo " <tbody>";
        
          $order=0;

          $lists = new ProductList($conn);
          $products = $lists->getProducts();
          $data = current($products);  
          $id=1;
          $price=array();
          while($data){      
                echo "<tr>";
                if($units[$order]>0)
                 {
                   $price[$order]=$data->getPrice();
                    echo " <td style='text-align: right; padding-right: 4px;'>";   echo  $id++;  echo "</td>";
                    echo " <td style='text-align: right; padding-right: 4px;'>";   echo $data->getProductCode(); echo "</td>";
                    echo " <td style='text-align: right; padding-right: 4px;'>";   echo $data->getProductName();  echo"</td>";
                    echo " <td style='text-align: right; padding-right: 4px;'>";   echo $data->getPrice();  echo"</td>";
                    echo " <td style='text-align: right; padding-right: 4px;'>";   echo $units[$order];   echo"</td>";
                    echo " <td style='text-align: right; padding-right: 4px;'>";   echo $data->getPrice()*$units[$order]; echo"</td>";
                  }
                echo "</tr>";  
                $order++;
                $data = next($products);


              }

            $pricee=sum($units,$price);          
            echo "<tr> ";
                   echo " <td colspan='5' style='text-align: center;'>รวม (บาท)</td>";
                   echo " <td style='text-align: right; padding-right: 4px;'>"; echo  $pricee[0];    echo "</td>";
           echo "</tr>";
           echo "<tr> ";
                   echo " <td colspan='5' style='text-align: center;'>ค่าภาษี (บาท)</td>";
                   echo " <td style='text-align: right; padding-right: 4px;'>";     echo  $pricee[1];    echo "</td>";
           echo "</tr>";
           echo "<tr>";
                  echo "  <td colspan='5' style='text-align: center;'>รวมภาษามูลค่าเพิ่ม 7 % (บาท)</td> ";
                  echo "  <td style='text-align: right; padding-right: 4px;'>";  echo  $pricee[2];      echo "</td>";
           echo "</tr>";
        
      
 




        echo " </tbody>";
    echo "</table>";



    }


?>