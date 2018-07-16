<?php if(!class_exists('Rain\Tpl')){exit;}?><?php require $this->checkTemplate("cadastro");?>

<?php require $this->checkTemplate("edit_cadastro_usuario");?>

<script type="text/javascript">
	
	
	$( document ).ready(function() {


		
			var idaluno = "<?php echo htmlspecialchars( $idaluno, ENT_COMPAT, 'UTF-8', FALSE ); ?>";
			$("#formcadastro").append('<input type="hidden" name="idaluno" id="idaluno">');
			$("#idaluno").val(idaluno);
			$("#tipo_usuario").val("aluno");

			$("#campos-funcionario").remove();

	});

</script>