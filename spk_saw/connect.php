<?php
$konek=new mysqli('localhost','root','','uas_dwh');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>