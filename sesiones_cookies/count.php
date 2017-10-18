<?php
session_start();
if (isset($_SESSION['count'])) {
  
  $_SESSION['count']++;
  echo "visita "+$_SESSION['count'];
} else {
    $_SESSION['count'] = 1;
    echo "visita "+$_SESSION['count'];
}
?>
