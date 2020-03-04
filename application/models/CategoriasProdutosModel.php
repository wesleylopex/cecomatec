<?php
class CategoriasProdutosModel extends MY_Model
{

	protected $table = 'categorias_produtos';
	protected $primary = 'id';
	protected $field_order = 'ordem';
	protected $type_order = 'asc';

}
