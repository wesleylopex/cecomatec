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
    $produtos = $this->getProdutosWithCategoria($this->produtosModel->getAll(3));
    $this->data["produtos"] = $this->getProdutosWithFirstImage($produtos);

    $this->load->model("bannersModel");
    $this->data["banners"] = $this->bannersModel->getAll();
    
    $this->load->view("index", $this->data);
  }

  // HELPING METHODS
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

  public function getProdutosWithFirstImage($produtos = [])
  {
    foreach ($produtos as $produto) {
      $produto = $this->getProdutoWithFirstImage($produto);
    }

    return $produtos;
  }

  public function getProdutoWithFirstImage($produto = null)
  {
    $this->load->model("galeriaProdutosModel");
    $produto->primeiraImagemGaleria = $this->galeriaProdutosModel->getAllWhere(["id_produto" => $produto->id], 1);

    return $produto;
  }
}
