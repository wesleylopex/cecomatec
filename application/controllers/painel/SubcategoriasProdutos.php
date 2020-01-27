<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SubcategoriasProdutos extends GodController
{

	protected $model = "SubcategoriasProdutosModel";
	protected $nomes = [
		"singular" => "Subcategoria",
		"plural" => "Subcategorias",
		"link" => "subcategoriasProdutos",
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
			"col" => "col-md-6",
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
			"col" => "col-md-6"
		],
	];

	function __construct()
	{
		parent::__construct();
	}
}
