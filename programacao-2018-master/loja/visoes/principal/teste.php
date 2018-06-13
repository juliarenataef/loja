<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="../assets/css/teste.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#abas ul li").addClass(function () {
                    $(this).toggleClass("selecionado");
                });
			    $("#abas ul li").click(function(){
				    $(this).toggleClass("selecionado");

                    var idAba = $(this).attr("id");

                    $("."+idAba).toggle();
                });
                $(".conteudo").click(function(){
                    $("#descricao aba").slideToggle("slow");
                });

            });


		</script>
</head>
<body>

	<div id="abas">
		<ul>
            <?php foreach ($categorias as $categoria): ?>

			<li id="aba<?=$categoria->getId()?>"><?=$categoria->getNome()?></li>

            <?php endforeach; ?>

		</ul>
	</div>



    <div id="conteudos">
        <?php foreach ($produtos as $produto): ?>

            <div class="conteudo aba<?=$produto->getId()?>">
                <?=$produto->getNome()?>

            </div>

        <?php endforeach; ?>


    </div>

    <?php foreach ($produtos as $produto): ?>

        <div id="descricao aba<?=$produto->getId()?>">
            <?=$produto->getDescricao()?>
        </div>

    <?php endforeach; ?>


</body>
</html>