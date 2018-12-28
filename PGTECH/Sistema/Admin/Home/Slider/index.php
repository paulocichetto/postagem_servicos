<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script type="text/javascript" src="../../Assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../../Assets/js/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href='Slider/style.css'>
</head>
<body>

<script type="text/javascript">

$(document).ready(function(){
  $("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
  $('.reorder_link').attr("cd_post","saveReorder");
  $('#reorderHelper').slideDown('slow');
  $('.image_link').attr("href","javascript:void(0);");
  $('.image_link').css("cursor","move");
  $("#saveReorder").click(function( e ){

  if( !$("#saveReorder i").length ){

    $("ul.reorder-photos-list").sortable('destroy');

    var h = [];
    $("ul.reorder-photos-list li").each(function() {  h.push($(this).attr('id').substr(9));});

    $.ajax({
        type: "POST",
        url: "Slider/atualiza_ordem.php",
        data: {ids: " " + h + ""},
        success: function(){
            location.href = "home.php#mensagem_atualizada";
        }
    });
  return false;
  }
      e.preventDefault();
});
});
</script>

<div class="container">
    <a href="javascript:void(0);" class="reorder_link" id="saveReorder">SALVAR</a>
    <div id="reorderHelper" class="light_box" style="display:none;">1. Arraste as fotos para reordenar.<br>2. Clique em Salvar quando terminar de reordenar.</div>
    <div class="gallery">

  <ul class='reorder_ul reorder-photos-list'>
        <?php
        include('Slider/imagem.php');

        if(!empty($result)){
            foreach($result as $row){

        // Vamos mostrar as imagens agora
				?>
			<li id='image_li_<?php echo $row["cd_post"]; ?>' class='ui-sortable-handle'>
			<a href='javascript:void(0);' style='float:none;' class='image_link'>
			<img draggable = 'true' src='Slider/Imagens/<?php echo $row["im_post"]; ?>' width='200px' height='200px'>
		  </a>

      <?php
        echo $row["cd_post"];
        echo $row["ds_post"];
      ?>

      <div onclick="$.ajax({
        type: 'POST',
        url: 'Slider/deletar.php',
        data: {codigo_imagem: <?php echo $row['cd_post'] ?>},
        success: function(){
            window.location.reload();
        }
        });"><button>X</button></div>
			</li>
<?php
}}
?>
</ul>
</div>
</div>


<h2>Gostaria de inserir alguma imagem?</h2>

<form method="post" action="Slider/inserir.php" enctype="multipart/form-data">
	<label>Descrição: </label>
	<input type="text" name="descricao">
	<br>
	<label>Imagem: </label>
	<input type="file" name="imagem">
	<br>
	<input type="reset" name="Limpar">
	<input type="submit" name="Enviar">
</form>

</body>
</html>