<?php
/*  This File is a Database Handler
    Used to connect to database
    As of now a local DB is set up
    Xampp uses my pc as local server
*/
$servername = "localhost";
$dBUsername = "root";
$dBPassword ="";
$dBName = "library_db";

$connect = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$connect){
    die("Connection Failed: ".mysqli_connect_error());
}