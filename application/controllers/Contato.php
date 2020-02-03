<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "contato";
  }

  public function index()
  {
    $this->load->view("contato", $this->data);
  }

  public function enviarMensagem($id_produto = null)
  {
    $this->load->model("mensagensModel");
    $this->load->model("produtosModel");

    $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
    $this->form_validation->set_rules('telefone', 'Telefone', 'trim|required');
    $this->form_validation->set_rules('email', 'E-mail', 'trim|required');
    $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');

    $produto = $this->produtosModel->getByPrimary($id_produto);

    $mensagem = [
      "nome" => $this->input->post("nome"),
      "telefone" => $this->input->post("telefone"),
      "empresa" => $this->input->post("empresa"),
      "endereco" => $this->input->post("endereco"),
      "email" => $this->input->post("email"),
      "mensagem" => $this->input->post("mensagem"),
      "origem" => $produto ? "produto $produto->titulo" : "Página de Contato"
    ];

    if ($this->form_validation->run() == FALSE)
      $result = ["success" => false];
    else {
      if ($this->mensagensModel->create($mensagem))
        $result = ["success" => true];
      else
        $result = ["success" => false];
    }

    echo json_encode($result);
  }
}
