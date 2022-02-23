<?php

class Usuario {

	public $id;
	public $nome;
	public $documento;

}


// inicio cria usuarios

$usuario1 = new Usuario;


$listaUsuarios = [];

$usuario1->id = 1;
$usuario1->nome = "Jean";
$usuario1->documento = "rg.pdf";

$listaUsuarios[0] = $usuario1;


$usuario2 = new Usuario;

$usuario2->id = 2;
$usuario2->nome = "Renan";
$usuario2->documento = "rg.png";

$listaUsuarios[1] = $usuario2;

// fim cria usuarios


// extensões imagens válidas
$arrayImagens = ["jpg", "jpeg", "png", "gif"];

// extensões arquivos válidos
$arrayArquivos = ["doc", "docx", "pdf"];






//inicio lista usuarios

foreach ($listaUsuarios as  $usuario) {



	echo $usuario->id . "<br>";
	echo $usuario->nome . "<br>";


	// pegando a extensão do arquivo
	$arrayUsuario = explode(".", $usuario->documento);


	// verificando se a extensão está dentro das imagens válidas
	if(in_array($arrayUsuario[1], $arrayImagens)){

		// // documento é uma imagem 
		echo $usuario->documento . "<br>";

	} else if(in_array($arrayUsuario[1], $arrayArquivos)){

		// documento é um arquivo 
		echo $usuario->documento . "<br>";

	} else {
		// documento inválido
		echo "";
	}

	echo "<hr>";
    

}

// fim lista usuarios



