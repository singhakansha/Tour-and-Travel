<?php
include 'db.php';
$handler="";
function openconnection()
{
    global $handler;
    $handler=  mysql_connect(SERVER,USERNAME,PASSWORD);
    mysql_select_db(DATABASE);
}
function closeconnection()
{
  global $handler;
  mysql_close($handler);
}
function executenonquery($qry)//update,delete,insert
{
    openconnection();
    mysql_query($qry);
}
function executequery($qry)//select
{
    openconnection();
    $res=  mysql_query($qry);
    return $res;
}