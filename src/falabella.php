<?php 

    class Falabella{

        public function __construct(){
            
        }
    
        public function searchValue($number){

            //Excepción para evaluar solamente números
            if(!is_numeric($number) || !is_int($number))  throw new InvalidArgumentException('Esta función solo acepta números enteros');
    
            switch (true) {
                //Buscamos si el valor es multiplo de 3 y 5
                case ((($number % 3) == 0) && (($number % 5) == 0)):
                    return "Integraciones";
                    break;
                //Buscamos si el valor es multiplo de 3
                case ((($number % 3) == 0) && (($number % 5) != 0)):
                    return "Falabella";
                    break;
                //Buscamos si el valor es multiplo de 5    
                case ((($number % 3) != 0) && (($number % 5) == 0)):
                    return "IT";
                    break;
                //Devolvemos el mismo valor que entró
                default:
                    return $number;
                    break;
            }

        }

    }
    
    

?>