<?php

echo '{"products":[';		
	$aux = 1;

	foreach ($produtos as $value) {

		if($aux <count($produtos)){
			echo '

				{
					"name" : "'.$value['nome'].'",
					"price" : "'.$value['preco'].'",
					"options" : [
						{ "Posição" : "'.$value['posicao'].'" },
						{ "Camara" : "'.$value['camara'].'" },
			    		{ "OneOfAKind" : "'.$value['oneOfAKind'].'" }
					],
					"image" : "'.$value['imagem'].'",
					"description" : "'.$value['descricao'].'"
				},';
			$aux++;
		}else{
			echo '
			{
				"name" : "'.$value['nome'].'",
				"price" : "'.$value['preco'].'",
				"options" : [
					{ "Posição" : "'.$value['posicao'].'" },
					{ "Camara" : "'.$value['camara'].'" },
			    	{ "OneOfAKind" : "'.$value['oneOfAKind'].'" }
				],
				"image" : "'.$value['imagem'].'",
				"description" : "'.$value['descricao'].'"
			}]';
		}
	}

	echo '}';

?>