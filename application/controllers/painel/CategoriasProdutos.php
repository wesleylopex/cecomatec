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
			"col" => "col-md-12",
			"slug" => true
		],
		
		"descricao" => [
			"nome" => "Descrição",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"class" => "summernote"
		],
	];

	function __construct()
	{
		parent::__construct();
	}
}
