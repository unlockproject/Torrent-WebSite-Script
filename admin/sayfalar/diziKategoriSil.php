<?php
if(!isset($_SESSION["login"])){
header("Location:index.php");
}
?>
<div class="yanyana">
<?php
if($_POST == TRUE){
	BaglantiAc();
	$id  = $_GET["id"];
	$sil = mysql_query("delete from dizi_turleri where id='$id'");
	if($sil){
		echo "<div class=\"uyar basarili\"><img src=\"images/icon/basarili.png\"><span>Dizi kategorisi Silindi.. Yönlendiriliyorsunuz.</span></div>";
		Yonlendir('yonetim.php?s=diziKategoriler',2);
	}
	else echo "<div class=\"uyar error\"><img src=\"images/icon/errors.png\"><span>Dizi Silinemedi .".mysql_error()."</span></div>";
	
	BaglantiKapat();	
}
?>
	<h3 class="anabaslik"> Dizi Kategorisi Silinecek </h3>
	<div style="clear:both;"></div>
<form action="" method="post"> 
<p> Az önce silinmesi için tıkladığınız dizi kategorisi aşağıdaki butona tıklayarak sistemden tamamen silebilirsiniz.<br/><br /><strong> Bu işlemi gerçekten yapmak istiyor musunuz ?</strong></p>
<input type="hidden" name="siliyorz" value="1"/>
<input type="submit" name="sil" value="Kategoriyi Sil" /> <br/><br/>
</form>
</div>
</div>
<div style="clear:both;"></div>