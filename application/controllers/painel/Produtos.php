<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends GodController
{

	protected $model = "ProdutosModel";
	protected $nomes = [
		"singular" => "Produto",
		"plural" => "Produtos",
		"link" => "produtos",
	];
	protected $permissoes = [
		"cadastrar" => true,
		"editar" => true,
		"excluir" => true,
	];

	protected $campos = [
		"id" => [
			"nome" => "Id",
			"type" => "hidden",
			"visivelTabela" => false,
			"rules" => "trim",
		],
		
		"titulo" => [
			"nome" => "Título",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim|required",
			"col" => "col-md-4",
			"slug" => true
		],
		
		"subtitulo" => [
			"nome" => "Subtítulo",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-4",
		],
		
		"id_categoria" => [
			"nome" => "Categoria",
			"type" => "select",
			"rules" => "trim|required",
			"fromDataBase" => true,
			"options" => [
				"value" => "id",
				"texto" => "nome",
				"model" => "categoriasProdutosModel",
			],
			"visivelTabela" => true,
			"col" => "col-md-4"
		],

		"id_subcategoria" => [
			"nome" => "Subcategoria",
			"type" => "select",
			"rules" => "trim",
			"fromDataBase" => true,
			"options" => [
				"value" => "id",
				"texto" => "nome",
				"model" => "subcategoriasProdutosModel",
			],
			"visivelTabela" => true,
			"col" => "col-md-4"
		],

		"imagem" => [
			"nome" => "Imagem",
			"type" => "image",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
		],
		
		"descricao" => [
			"nome" => "Descrição",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
		],
		
		"caracteristicas" => [
			"nome" => "Características",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"class" => "summernote"
		],

		"modelos" => [
			"nome" => "Modelos",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"class" => "summernote"
		],
		
		"video" => [
			"nome" => "Vídeo",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"label" => "(<a href='https://youtube.com' target='_blank'>YouTube</a>)",
		],
		
		"arquivo_pdf" => [
			"nome" => "Arquivo PDF",
			"type" => "file",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
		],

	];

	function __construct()
	{
		parent::__construct();
	}
}
