<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Configuracoes extends GodController
{

	protected $model = "configuracoesModel";
	protected $nomes = [
		"singular" => "Configuracão",
		"plural" => "Configurações",
		"link" => "configuracoes",
	];

	protected $permissoes = [
		"cadastrar" => false,
		"editar" => true,
		"excluir" => false,
		"registroUnico" => true
	];

	protected $campos = [
		"id" => [
			"nome" => "Id",
			"type" => "hidden",
			"visivelTabela" => false,
			"rules" => "trim|required",
		],

		"separator_telefone" => [
			"nome" => "Telefone",
			"type" => "separator"
		],

		"telefone_principal" => [
			"nome" => "Telefone Principal",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-4",
		],
		
		"telefone_secundario" => [
			"nome" => "Telefone Secundário",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-4",
		],
		
		"separator_informacoes" => [
			"nome" => "Informações",
			"type" => "separator"
		],

		"endereco" => [
			"nome" => "Endereço",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-6",
		],

		"email" => [
			"nome" => "E-mail",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-6",
		],
		

		"tempo_banner" => [
			"nome" => "Tempo dos Banners (em segundos)",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-4",
		],
				
		"separator_social" => [
			"nome" => "Redes Sociais",
			"type" => "separator"
		],

		"facebook" => [
			"nome" => "Facebook",
			"type" => "text",
			"visivelTabela" => true,
			"rules" => "trim",
			"col" => "col-md-4",
		],
		"linkedin" => [
			"nome" => "Linkedin",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-4",
		],
		"youtube" => [
			"nome" => "YouTube",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-4",
		],

		"separator_mapa" => [
			"nome" => "Google Maps",
			"type" => "separator"
		],

		"latitude" => [
			"nome" => "Latitude",
			"type" => "text",
			"visivelTabela" => false,
			"rules" => "trim",
			"col" => "col-md-6",
		],
		"longitude" => [
			"nome" => "Longitude",
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
