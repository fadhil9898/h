<?php
$username="admin";
$password="qwerty";

if($username=="admin" &&$password == "qwerty")
{
echo "username dan password sesuai hak akses diberikan";

}else if($username=="admin" && $password !="qwerty")
{
echo "username sesuai,password tidak sesuai";
}
else if ($username!="admin" && $password != "qwerty")
{
echo "username tidak sesuai,password tidak sesuai";
}
else{
echo "error";
}