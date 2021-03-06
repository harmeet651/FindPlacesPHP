<html>
<head>
	<script type="text/javascript">
		json = undefined;
		function getCurrentLocation()
		{
			URL = "http://ip-api.com/json";
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("GET",URL,false);
			xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			}
        };   
    		xmlhttp.send(null);
    		jsonObj = xmlhttp.responseText;
		}
	</script>
	<style type="text/css">
		#wrapper{
			width: 50%;
		}
		#queryBox{
			border:1px solid;
		}
		#title{
			text-align: center;
		}
		#distance{
		}
	</style>
</head>
<body onload="getCurrentLocation();">

	<div id="wrapper">
		<div id="queryBox">
			<div id="title">Travel and Entertainment Search</div>
			<hr>
			<form name="travelForm" method="GET" action="<?php $_SUBMIT['PHP_SELF']; ?>">
				<div id="keyword">Keyword
			<span><input type="text" required name="keyword1">
			</div>
			<div id="category">Category
			<span><select name="category">
				<option value="default">default</option>
				<option value="restaurant">restaurant</option>
			</select></span>
		</div>
		<div id="distance">Distance (miles)
			<input type="text" name="miles"/>from 
			<span id="pref" style="display:inline-flex; flex-direction: column;">
			<span style="flex:1;"><input type="radio" name="curLoc"/>Here</span>
			<span style="flex:1;"><input type="radio" name="curLoc"/><input type="text" name="locText"/></span></span>
		</div>
		<input type="submit" name="submit_form" value="submit"/>
		<input type="reset" name="reset_form" value="reset"/>
			</form>
		</div>
	</div>	
</body>
</html>