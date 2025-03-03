<?php
setcookie("cerez","pınar",time()+(60*60*24*365));
if(isset($_COOKIE["cerez"]))
{
    echo "cerezin adı: ".$_COOKIE["cerez"];
}
else
{
    echo "böyle bir çerez yok";
}
?>