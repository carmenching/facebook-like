<?php
include "template/headerpreset.php";

?>

<h1>System Message</h1>
<p>Le compte est crée, vous pouvez désormais vous connecter avec votre identifiant</p>

<?php
header("refresh:5; url=http://localhost/zbook/login.php");
?>