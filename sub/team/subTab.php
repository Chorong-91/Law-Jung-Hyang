<!-- subTab -->
<div class="subTab">
	<ul class="btn3" style="width:892px;">
		<li <?=strstr($fileName, "chief")?'class="on"':''?>><a href="/sub/team/chief.php">대표변호사</a></li>
		<li <?=strstr($fileName, "advisor")?'class="on"':''?>><a href="/sub/team/advisor.php">고문변호사</a></li>
		<li <?=strstr($fileName, "list")||strstr($fileName, "lawyer")||strstr($folderName, "lw")?'class="on"':''?>><a href="/sub/team/list.php">변호사</a></li>
		<li <?=strstr($fileName, "foreign")||strstr($folderName, "foreign")?'class="on"':''?>><a href="/sub/team/foreign.php">외국변호사</a></li>
	</ul>
</div>
<!-- //subTab -->
