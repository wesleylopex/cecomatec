<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pesquisa extends MY_Site_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data["page"] = "pesquisa";
  }

  public function index()
  {

    $this->load->model("produtosModel");
    $produtos = $this->produtosModel->getAll();
    $servicos = [
      [
        "titulo" => "Assesoria Microfusão",
        "descricao" => "Em nossos mais de 20 anos já ajudamos centenas de empresas a iniciar suas operações em fundição de precisão. Nossa consultoria compreende todos os aspectos da engenharia da produção: criando os desenhos para o layout mais eficiente de sua planta industrial, até auxiliar o empreendedor a escolher o maquinário correto para cada operação."
      ],
      [
        "titulo" => "Usinagem",
        "descricao" => "Empregamos nosso conhecimento em fabricação de máquinas, para desenvolvimento de soluções em usinagem de peças para nossos clientes. Trabalhamos com grandes lotes ou peças únicas de reposição através de desenho ou amostra, auxiliando na definição de materiais, tratamento térmico e acabamento superficial."
      ],
      [
        "titulo" => "Reformas e Adequações NR12",
        "descricao" => "A Norma Regulamentadora de segurança no trabalho em máquinas e equipamentos estabelece medidas preventivas de segurança e higiene do trabalho a serem obrigatoriamente adotadas pelas empresas em relação à instalação, operação e manutenção. Visa a rigorosa prevenção de possíveis acidentes, garante à empresa e ao colaborador qualidade e segurança."
      ],
    ];
    $this->load->model("categoriasProdutosModel");
    $categorias = $this->categoriasProdutosModel->getAll();

    $this->data["pesquisa"] = $this->input->get("pesquisa");
    $pesquisa = strtolower($this->data["pesquisa"]);
    $palavras = explode(" ", $pesquisa);

    $produtos = $this->getRelatedRegisters($produtos, $palavras);
    $servicos = $this->getRelatedRegisters($this->ToObject($servicos), $palavras);
    $categorias = $this->getRelatedRegisters($this->ToObject($categorias), $palavras);
    $this->data["produtos"] = $produtos;
    $this->data["servicos"] = $servicos;
    $this->data["categorias"] = $categorias;

    $this->data["size"] = sizeof($produtos) + sizeof($servicos) + sizeof($categorias);

    $this->load->view("pesquisa", $this->data);
  }

  public function getRelatedRegisters($registros, $palavras)
  {
    $registrosFinais = [];

    foreach ($registros as $key => $registro) {
      foreach ($palavras as $key => $palavra) {
        // echo strtolower($registro->titulo) . "----->" . strtolower($palavra) . "</br>";
        if (!empty($palavra)) {
          if (isset($registro->titulo))
            $titulo = strpos(strtolower($registro->titulo), strtolower($palavra));

          if (isset($registro->subtitulo))
            $subtitulo = strpos(strtolower($registro->subtitulo), $palavra);

          if (isset($registro->nome))
            $nome = strpos(strtolower($registro->nome), $palavra);
        }

        if ((isset($titulo) && $titulo !== false) || (isset($subtitulo) && $subtitulo !== false) || (isset($nome) && $nome !== false)) {
          array_push($registrosFinais, $registro);
          break;
        }
      }
    }

    return $registrosFinais;
  }

  public function ToObject($Array)
  {

    // Create new stdClass object 
    $object = new stdClass();

    // Use loop to convert array into 
    // stdClass object 
    foreach ($Array as $key => $value) {
      if (is_array($value)) {
        $value = $this->ToObject($value);
      }
      $object->$key = $value;
    }
    return $object;
  }
}
