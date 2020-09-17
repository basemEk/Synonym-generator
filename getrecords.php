<?php 
$host         = "localhost";
$username     = "root";
$password     = "";
$result_array = array();
$dbname       = "synonyms";
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection to database failed: " . $conn->connect_error);
}

//db
    $flag=0;
    $name = $_GET["name"];
    $sql="SELECT * from synonames WHERE word = '$name'";
   $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $res=$row["synonym"];
            $flag=1;
        }
    }

 
    
if($flag==1){
    echo $res;
}
else{
    $sql="SELECT * from synonames WHERE synonym = '$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $res=$row["word"];
            $flag=1;
        }
    }
    echo $res;

}
$conn->close();
?>