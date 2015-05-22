<ul class="menu">
	<li>
		<a href="">file </a>
		<ul classe="list">
			<li><a href="">new</a></li>
			<li><a href="" >tools</a></li>
			<li><a href="">projet</a></li>
			<li><a href="" >help</a></li>
		</ul>
	</li>
	<li>
		<a href="">edit </a>
		<ul classe="list">
			<li><a href="">new</a></li>
			<li><a href="" >tools</a></li>
			<li><a href="">projet</a></li>
			<li><a href="" >help</a></li>
		</ul>
	</li>
	<li>
		<a href="">selection</a>
	<ul classe="list">
			<li><a href="">new</a></li>
			<li><a href="" >tools</a></li>
			<li><a href="">projet</a></li>
			<li><a href="" >help</a></li>
		</ul>
	</li>
	<li>
		<a href="">find</a>
	<ul classe="list">
			<li><a href="">new</a></li>
			<li><a href="" >tools</a></li>
			<li><a href="">projet</a></li>
			<li><a href="" >help</a></li>
		</ul>
	</li>
	

</ul>
<script type="text/javascript" src="menu.js"></script>


<script type="text/javascript">
sfHover = function() {
        var sfEls = document.getElementById("menu").getElementsByTagName("LI");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
        }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

</script>