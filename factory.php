<?php 
class factory {
    public static function factory($className){
        // var_dump($className);
        return new $className;
    }
}
$factory=new factory;

//     public static $instances=[];
//     //   public static function getInstance($className){
//         // $cls = $className;
//         if (!isset(self::$instances[$className])) {
//             self::$instances[$className] = new $className();
//             // var_dump(self::$instances[$cls]);
            
//             // var_dump( self::$instances);
//         }
//         return self::$instances[$className];
//     }
// }

