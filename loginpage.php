<?php

$username = $_POST["Username"];
$pwd = $_POST["password"];

if ($username=="ding" and $pwd=="dong")
{
  echo "successful login";
  setcookie("xsession","true",time()+3600);
}
else
{
  header("Location: login1.html");
}
