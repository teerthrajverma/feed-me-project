 <?php
$dbusername = "root"; 
    $dbpassword = ""; 

    try{
        $conn = new PDO('mysql:dbname=test;host=localhost',$dbusername,$dbpassword);
        if(!isset( $_GET["value"])){
            throw new Exception('value not found');
        }
        $value = $_GET["value"];
        $sql = "INSERT INTO `sensor` ( `value`) VALUES (:value);";
        $stm = $conn->prepare($sql);
        $stm->execute(['value'=> $value]);
        echo 'done';
    }
    catch (Exception $e){
        echo $e->getMessage();
    }


?>

