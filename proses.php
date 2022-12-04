<?php
 include('bar128.php');
 echo '<div width:100%">';
 echo bar128(stripslashes($_GET['data']));
 echo '</div>';
?>