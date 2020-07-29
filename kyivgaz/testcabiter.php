$cabinet_id = JRequest::getVar('account');
if($cabinet_id){
$iframe_src = "https://mynew.kyivgaz.ua/Account/Login/".$cabinet_id"?num=kievgas";
} else {
$iframe_src = "https://mynew.kyivgaz.ua/Account/Login/";
}
?>
<div class="cabinet">
<iframe ame src="<?=$iframe_src?>" height="500px" width="1000px" scrolling="no"></iframe>
</div>
