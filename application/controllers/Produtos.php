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
    $produtos = $this->getProdutosWithCategoria($this->produtosModel->getAll());
    $produtos = $this->getProdutosWithFirstImage($produtos);
    $this->data["produtos"] = $this->removeProdutosWithoutImages($produtos);

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
      $produto = $this->getProdutoWithCategoria($produto);
      $this->data["produto"] = $this->getProdutoWithImages($produto);
      $this->data["produtosRelacionados"] = $this->getProdutosRelacionados($produto);
      $this->load->view("produto", $this->data);
    } else
      redirect("produtos");
  }

  // HELPING METHODS
  public function getProdutosRelacionados($produto)
  {
    $produtosRelacionados = $this->produtosModel->getAllWhere(["id_categoria" => $produto->id_categoria, "id != " => $produto->id], 4);

    if (sizeof($produtosRelacionados) < 4) {
      $produtos = $this->produtosModel->getAllWhere(["id_categoria != " => $produto->id_categoria, "id != " => $produto->id], 4 - sizeof($produtosRelacionados));
      $produtos = $this->getProdutosWithCategoria(array_merge($produtosRelacionados, $produtos));
      return $this->getProdutosWithFirstImage($produtos);
    }

    $produtos = $this->getProdutosWithCategoria($produtosRelacionados);
    return $this->getProdutosWithFirstImage($produtos);
  }

  public function removeProdutosWithoutImages($produtos = [])
  {

    $this->load->model("galeriaProdutosModel");

    foreach ($produtos as $key => $produto) {
      $imagens = $this->galeriaProdutosModel->getAllWhere(["id_produto" => $produto->id]);
      if (sizeof($imagens) == 0)
        unset($produtos[$key]);
    }

    return $produtos;
  }

  public function getProdutoWithImages($produto = null) {

    $this->load->model("galeriaProdutosModel");
    $produto->imagens = $this->galeriaProdutosModel->getAllWhere(["id_produto" => $produto->id]);

    return $produto;
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
