<?php 

namespace App\Enums;


use Ramsey\Uuid\Type\Integer;

 enum TireStatus: int
 {
    case OnVehicle = 1;
    case InStore = 0;
 }



 ?>