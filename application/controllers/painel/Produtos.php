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

		// "id_subcategoria" => [
		// 	"nome" => "Subcategoria",
		// 	"type" => "select",
		// 	"rules" => "trim",
		// 	"fromDataBase" => true,
		// 	"options" => [
		// 		"value" => "id",
		// 		"texto" => "nome",
		// 		"model" => "subcategoriasProdutosModel",
		// 	],
		// 	"visivelTabela" => true,
		// 	"col" => "col-md-4"
		// ],
		
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
			"class" => "froala"
		],

		"modelos" => [
			"nome" => "Modelos",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"class" => "froala"
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

		"galeria" => [
			"nome" => "Imagens",
			"type" => "gallery",
			"model" => "galeriaProdutosModel",
			"foreignKey" => "id_produto",
			// "rules" => "trim|required",
			"col" => "col-md-12",
			"label" => "(1920 x 1080)"
		],

	];

	function __construct()
	{
		parent::__construct();
	}
}
