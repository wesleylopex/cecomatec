<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CategoriasProdutos extends GodController
{

	protected $model = "CategoriasProdutosModel";
	protected $nomes = [
		"singular" => "Categoria",
		"plural" => "Categorias",
		"link" => "categoriasProdutos",
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

		"nome" => [
			"nome" => "Nome",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim|required",
			"col" => "col-md-8",
			"slug" => true
		],
		
		"ordem" => [
			"nome" => "Ordem",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-4",
		],

		"thumbnail" => [
			"nome" => "Imagem de Perfil",
			"type" => "image",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"label" => "(500 x 500)"
		],

		"banner" => [
			"nome" => "Banner",
			"type" => "image",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"label" => "(1420 x 500)"
		],
		
		"descricao" => [
			"nome" => "Descrição",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			// "class" => ""
		],
	];

	function __construct()
	{
		parent::__construct();
	}
}
