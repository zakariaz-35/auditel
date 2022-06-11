<?php
include_once("config/connection.php");
include_once("vue/menu.php");

$page = isset($_GET['page'])? $_GET['page'] : '';
if($page == 'service'){
    include_once("vue/service.php");
}
else if($page == 'realisation'){
    include_once("vue/realisation.php");
}
else if($page == 'actualite'){
    include_once("vue/actualite.php");
}
else if($page == 'contact'){
    include_once("vue/contact.php");
}
else if($page == 'devis'){
    include_once("vue/devis.php");
}
 
include_once("vue/footer.php");

?>

