<?php
	/*
	* Arquivo responsável por receber dados diante requisição POST
	* e realizar procedimento de gerar arquivo(.docx) word utilizando
	* como auxilio biblioteca externa PhpWord
	*/
	declare(strict_types=1);

	//autoload(composer)
	require_once __DIR__."/vendor/autoload.php";

	//referencia namespaces(dirs) de localizações das classes PhpWord e IOFactory para carregamento(autoload)
	use PhpOffice\PhpWord\PhpWord;
	use PhpOffice\PhpWord\IOFactory;

	//requisição dados POST
	$titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_STRING);
	$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);
	$font = filter_input(INPUT_POST, "font", FILTER_SANITIZE_STRING);
	$size = filter_input(INPUT_POST, "size", FILTER_SANITIZE_NUMBER_INT);
	$bold = filter_input(INPUT_POST, "bold", FILTER_SANITIZE_STRING);
	$nome_arquivo = filter_input(INPUT_POST, "nome_arquivo", FILTER_SANITIZE_STRING);

	//realiza validação diante variaveis
	if(empty($titulo) or empty($descricao) or empty($font) or empty($size) or empty($bold) or empty($nome_arquivo)) {

		header("Location: index.php");
		exit();

	}

	//valida informação diante $bold
	($bold == "Sim")?$bold = true:$bold = false;

	//instancia(obj) da classe PhpWord
	$phpword = new PhpWord();

	//cria sessão de conteúdo
	$section = $phpword->addSection();

	//adiciona conteúdo
	$section->addText("Título: ".$titulo, array("name" => $font, "size" => $size, "bold" => $bold));
	$section->addText("Descrição: ".$descricao, array("name" => $font, "size" => $size, "bold" => $bold));

	//salva arquivo(.docx) word
	$objWriter = IOFactory::createWriter($phpword, "Word2007");
	$objWriter->save(__DIR__."/files/".$nome_arquivo);
?>