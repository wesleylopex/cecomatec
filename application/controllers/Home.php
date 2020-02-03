<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "home";
  }

  public function index() {
    $this->load->model("produtosModel");
    $this->data["produtos"] = $this->getProdutosWithCategoria($this->produtosModel->getAll(3));
    
    $this->load->model("bannersModel");
    $this->data["banners"] = $this->bannersModel->getAll();
    
    $this->load->view("index", $this->data);
  }

  public function getProdutoWithCategoria($produto) {

    $this->load->model("categoriasProdutosModel");
    $produto->categoria = $this->categoriasProdutosModel->getByPrimary($produto->id_categoria);

    return $produto;
  }

  public function getProdutosWithCategoria($produtos) {
    foreach($produtos as $produto) {
      $produto = $this->getProdutoWithCategoria($produto);
    }

    return $produtos;
  }
}
