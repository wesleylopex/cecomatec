<?php
class SubcategoriasProdutosModel extends MY_Model
{

	protected $table = 'subcategorias_produtos';
	protected $primary = 'id';
	protected $field_order = 'nome';
	protected $type_order = 'asc';

}
