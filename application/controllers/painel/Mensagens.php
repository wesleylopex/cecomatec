<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mensagens extends GodController
{

	protected $model = "mensagensModel";
	protected $nomes = [
		"singular" => "mensagem",
		"plural" => "Mensagens",
		"link" => "mensagens",
	];
	protected $permissoes = [
		"cadastrar" => false,
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
			"rules" => "trim",
			"col" => "col-md-6",
			"disabled" => true
		],
		
		"telefone" => [
			"nome" => "Telefone",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-6",
			"disabled" => true
		],
		
		"empresa" => [
			"nome" => "Empresa",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-6",
			"disabled" => true
		],

		"origem" => [
			"nome" => "Origem",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-6",
			"disabled" => true
		],

		"endereco" => [
			"nome" => "Endereço",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-6",
			"disabled" => true
		],
		
		"email" => [
			"nome" => "E-mail",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-6",
			"disabled" => true
		],

		"mensagem" => [
			"nome" => "Mensagem",
			"type" => "textarea",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-12",
			"disabled" => true
		]

	];

	function __construct()
	{
		parent::__construct();
	}
}
