<?php 

namespace App\Enums;

 enum Maintenance: string
 {
    case Request = 'oil';
    case Cambio = 'cambio';
    case Engine = 'engine';
    case Defferencial = 'differ';
    case Lights = 'light';
    case Mirror = 'mirror';
    case Other = 'other';
    
 }



 ?>