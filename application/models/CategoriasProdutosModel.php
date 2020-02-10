<?php
class CategoriasProdutosModel extends MY_Model
{

	protected $table = 'categorias_produtos';
	protected $primary = 'id';
	protected $field_order = 'nome';
	protected $type_order = 'asc';

}
