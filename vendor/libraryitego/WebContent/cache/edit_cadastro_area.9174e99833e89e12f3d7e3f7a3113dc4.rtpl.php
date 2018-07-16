<?php if(!class_exists('Rain\Tpl')){exit;}?><?php require $this->checkTemplate("cadastro_area");?>

<script type="text/javascript">
	
	
	$( document ).ready(function() {
		
			var nome_area = "<?php echo htmlspecialchars( $nome_area, ENT_COMPAT, 'UTF-8', FALSE ); ?>";
			var idarea = "<?php echo htmlspecialchars( $idarea, ENT_COMPAT, 'UTF-8', FALSE ); ?>";
		
			$("#nome_area").val(nome_area);
			
			$("#formlivroarea").append('<input type="hidden" name="idarea" id="idarea">');
			$("#idarea").val(idarea);
		
	});

</script>