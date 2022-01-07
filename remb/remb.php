<html>
<body>
<style>

#up
{
	cursor: pointer;
	border:1px solid black;
}

</style>



<img src="up.png" id="up" onclick="testing();"/>


<div id="movescore">
<a id="levelscore">1</a>
</div>

<script>
var levelscore = document.getElementById("levelscore");
var upp = document.getElementById("up");
var levelnumber = 2;
function testing()
{
	
	levelscore.innerHTML = levelnumber++;
	

}



</script>
</body>
</html>