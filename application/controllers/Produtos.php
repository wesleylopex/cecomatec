<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "produtos";
  }

  public function index($slug_categoria = null)
  {
    redirect("produtos/categorias");
    // $this->load->model("produtosModel");
    // $produtos = $this->getProdutosWithCategoria($this->produtosModel->getAll());
    // $produtos = $this->getProdutosWithFirstImage($produtos);
    // $this->data["produtos"] = $this->removeProdutosWithoutImages($produtos);

    // if ($slug_categoria) {
    //   $this->load->model("categoriasProdutosModel");
    //   $this->data["header_categoria"] = $this->categoriasProdutosModel->getRowWhere(["slug" => $slug_categoria]);
    // }

    // $this->load->view("produtos", $this->data);
  }

  public function categorias($slug = null)
  {

    $this->load->model("categoriasProdutosModel", "categoriesModel");

    if ($slug) {
      $this->load->model("produtosModel", "productsModel");
      $category = $this->categoriesModel->getRowWhere(["slug" => $slug]);
      if(!$category)
        redirect("produtos/categorias");
      $products = $this->productsModel->getAllWhere(["id_categoria" => $category->id]);
      $products = $this->getProdutosWithFirstImage($products);
      $products = $this->setCategorieOnProducts($products, $category);

      $this->data["produtos"] = $products;
      $this->data["categories"] = [];
      $this->data["category"] = $category;
    } else {
      $categories = $this->categoriesModel->getAll();

      $this->data["categories"] = $categories;
      $this->data["produtos"] = [];
    }

    $this->load->view("produtos", $this->data);
  }

  public function setCategorieOnProducts($products, $categorie) {
    foreach ($products as $key => $product) {
      $product->categoria = $categorie;
    }

    return $products;
  }

  public function getCategoriesWithImages($categories)
  {
    foreach ($categories as $category) {
      $category = $this->getCategoryWithImage($category);
    }

    return $categories;
  }

  public function getCategoryWithImage($category)
  {

    // $this->load->model("produtosModel");
    // $product = $this->produtosModel->getLastWhere(["id_categoria" => $category->id]);

    // $this->load->model("galeriaProdutosModel", "galleryModel");
    // $last_image = $this->galleryModel->getLastWhere(["id_produto" => $product->id]);
    // $category->image = $last_image;

    return $category;
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

  public function getProdutoWithImages($produto = null)
  {

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
