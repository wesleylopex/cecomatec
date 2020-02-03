<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "produtos";
  }

  public function index($slug_categoria = null, $slug_subcategoria = null)
  {
    $this->load->model("produtosModel");
    $this->data["produtos"] = $this->getProdutosWithCategoria($this->produtosModel->getAll());

    if ($slug_categoria) {
      $this->load->model("categoriasProdutosModel");
      $this->data["header_categoria"] = $this->categoriasProdutosModel->getRowWhere(["slug" => $slug_categoria]);
    }

    if ($slug_subcategoria) {
      $this->load->model("subcategoriasProdutosModel");
      $this->data["header_subcategoria"] = $this->subcategoriasProdutosModel->getRowWhere(["slug" => $slug_subcategoria]);
    }
    
    $this->load->view("produtos", $this->data);
  }

  public function produto($slug = null)
  {
    $this->load->model("produtosModel");
    $produto = $this->produtosModel->getRowWhere(["slug" => $slug]);

    if ($produto) {
      $this->data["produto"] = $this->getProdutoWithCategoria($produto);
      $this->data["produtosRelacionados"] = $this->getProdutosRelacionados($produto);
      $this->load->view("produto", $this->data);
    } else
      redirect("produtos");
  }

  // HELPING METHODS
  public function getProdutosRelacionados($produto)
  {
    $produtosRelacionados = $this->produtosModel->getAllWhere(["id_categoria" => $produto->id_categoria, "id != " => $produto->id]);

    if (sizeof($produtosRelacionados) < 4) {
      $produtos = $this->produtosModel->getAllWhere(["id_categoria != " => $produto->id_categoria, "id != " => $produto->id], 4 - sizeof($produtosRelacionados));
      return $this->getProdutosWithCategoria(array_merge($produtosRelacionados, $produtos));
    }

    return $this->getProdutosWithCategoria($produtosRelacionados);
  }

  public function getProdutoWithCategoria($produto)
  {

    $this->load->model("categoriasProdutosModel");
    $produto->categoria = $this->categoriasProdutosModel->getByPrimary($produto->id_categoria);

    return $produto;
  }

  public function getProdutosWithCategoria($produtos)
  {
    foreach ($produtos as $produto) {
      $produto = $this->getProdutoWithCategoria($produto);
    }

    return $produtos;
  }
}
