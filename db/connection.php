<?php
$db = mysqli_connect("localhost", "stud3148", "123", "sa_ausw");
if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}