<?php
if(isset($variabel_cookies)){
    echo 'Variabel cookiesnya "$variabel_cookies" nilainya adalah '.$_COOKIE['variabel_cookies'];
} else {
    echo "Variabel cookies belum diterapkan";
}
?>
