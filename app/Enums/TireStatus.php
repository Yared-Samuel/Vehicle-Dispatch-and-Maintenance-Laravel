<?php 

namespace App\Enums;


use Ramsey\Uuid\Type\Integer;

 enum TireStatus: int
 {
    case InStore = 1;
    case OnVehicle = 2;    
    case Disposed = 3;
 }



 ?>