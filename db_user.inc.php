<?php
include ("db_connect.inc.php");
function member(){
    global $con;
    $member=[];
    if($res=$con->query("SELECT * FROM members WHERE Class='user'")){
        while($data=$res->fetch(PDO::FETCH_OBJ)){
                $member[]=array($data->ID,$data->Name,$data->Surname,$data->Username);
        }
       return $member;
    }
}
function login($username,$pwd){
    global $con;
    $detail=[];
    if($res=$con->query("SELECT * FROM members")){
        while($data=$res->fetch(PDO::FETCH_OBJ)){
            if($username==$data->Username && $pwd==$data->Password){
                $detail=array($data->ID,$data->Name,$data->Surname,$data->Class);
                return $detail;
            }
        }
        return $detail;
    }
}
function create_table($header,$data){
    if(!empty($data)){
        $l=0;
        echo "<table>";
        echo "<tr>";
        for($i=0;$i<count($header);$i++){
            echo "<th><center><span style='font-weight: bold'>$header[$i]</span></center></th>";
        }
        echo "</tr>";

        foreach ($data as $value) {
            echo "<tr>";
            foreach ($value as $result) {
                echo "<td>" . $result . "</td>";
            }
            echo "</tr>";

        }
        echo "</table>";
    }
}
function add_user($id,$name,$surname,$username){
    global $con;
    $class='user';
    $add_sql="INSERT INTO members (ID,Name,Surname,Class,Username,Password) 
              VALUES ('$id','$name','$surname','$class','$username','$username')";
    $con->exec($add_sql);
}
function del_user($id){
    global $con;
    $del_sql="DELETE FROM members WHERE ID='$id'";
    $con->exec($del_sql);
}
function edit_user($user_detail){
    global $con;
    $id=$user_detail[0];
    $name=$user_detail[1];
    $surname=$user_detail[2];
    $username=$user_detail[3];
    $edit_sql="UPDATE members SET Name='$name',Surname='$surname',Username='$username' WHERE ID='$id'";
    $stmt = $con->prepare($edit_sql);
    $stmt->execute();

}
function search_user($id){
    global $con;
    $user=[];
    if($res=$con->query("SELECT Name, Surname, Username FROM members WHERE ID='$id'")){
        $data=$res->fetch(PDO::FETCH_OBJ);
        $user[]=array($data->Name,$data->Surname,$data->Username);
        return $user;
    }
}
?>