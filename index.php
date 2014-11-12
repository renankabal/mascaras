<!DOCTYPE html>
<html>
<head>
	<title>teste</title>
	<script src="mascara/jquery.js" type="text/javascript"></script>
	<script src="mascara/jquery.inputmask.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
		   $(".data").inputmask("99/99/9999",{
		   	"onincomplete": function(){
		   		$(this).css({
                      'background': '#f2dede'
                    });
		   		}
		   	}); //Máscara de data
		});
	</script>
</head>
<body>
	<input class="data"/><br /><br />
</body>
</html>