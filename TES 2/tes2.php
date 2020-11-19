<html>
<head>
	<title>
		TES 2 Refactory
	</title>
<style type="text/css">
	.container {
		background-color:grey;
		width:1300px;
		height: 660px;
		position: fixed;
	}

	.form {
		line-height: 100%;
		text-align: center;
		margin-top: 200px;
		font-size: 24px;
	}

	.output {
		font-size: 40px;
		font-family:calibri ;


	}

</style>
	<body>

		
	<div class = "container">
		<form class="form-horizontal" method = 'POST' role="form">
			<div class = "form">
			<label for="kata" class="control-label col-sm-2"><?php $tring ?></label>
			<input type="text" name="kata"	>
				<p class="output">
				Output : <?php 
				$string = $_POST['kata'];
				$hasil = strrev($string);
				echo $hasil;
				?> 
				</p>
				
				 <td colspan = '3' align = 'center'>
				 <input type = 'submit' class="btn btn-danger btn-lg " name = 'submit' value = 'Reverse'/>
				 <input type = 'reset' class="btn btn-danger btn-lg " name = 'Reset' value = 'Undo/Redo	' /> </td>
				 </tr>
	
		</form>

		</div>
				
	</div>

	</body>
</head>
</html>




	