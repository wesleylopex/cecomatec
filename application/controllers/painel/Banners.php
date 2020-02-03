<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Banners extends GodController
{

	protected $model = "bannersModel";
	protected $nomes = [
		"singular" => "Banner",
		"plural" => "Banners",
		"link" => "banners",
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
			"rules" => "trim",
			"col" => "col-md-6",
		],
		
		"subtitulo" => [
			"nome" => "Subtítulo",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-6",
		],
		
		"imagem" => [
			"nome" => "Imagem",
			"type" => "image",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-4",
			"label" => "(1920 x 1080)"
		],

		"link_botao" => [
			"nome" => "Link do botão",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-6",
		],
		
		"texto_botao" => [
			"nome" => "Texto do botão",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-6",
		],

	];

	function __construct()
	{
		parent::__construct();
	}
}
