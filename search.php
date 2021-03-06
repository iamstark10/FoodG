<html>
	<head>
		<?php
			include("head.php");
		?>
	</head>
	<body>
		
<!-- Main view -->
<div data-role="page" data-add-back-btn="true">
	<script type="text/javascript">
		fill();
		$(function(){
			$("#searchField").on("input", function(e) {
    			fill();
    		});
		});

    	function fill(){
    		$.post("ajaxSearch.php", {search:$("#searchField").val()}, function(data) {
    			var sugList = $("#suggestions");
				sugList.html(data);
				sugList.listview("refresh").trigger("create");
			});
    	}
	</script>

	<div data-role="header">
		<h1>My Fridge</h1>
		<a href="logout.php" data-role="button" class="ui-btn-right">Logout</a>
	</div><!-- /header -->

	<div data-role="content">
		
		<p>
        	<input type="text" id="searchField" placeholder="Search" />
        	<ul id="suggestions" data-role="listview" data-inset="true"></ul>
        </p>
		
	</div><!-- /content -->
	<?php
		include("footer.php");
	?>

</div>

		
	</body>
</html>