
<?php
session_start();
if(!$_SESSION['m_name'])
{
    header('Location: login.php');
}
?>