<?php
setcookie("cookietest", "test123456", time() + 360, "/marketing/", "localhost", false, false);
echo "o valor do cookie de teste é : {$_COOKIE["cookietest"]}";
?>

<script>
    alert(document.cookie);
</script>