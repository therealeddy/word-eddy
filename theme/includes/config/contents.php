<?php

class Contents
{

	public function __construct()
	{
		add_action('init', array($this, 'hook_init'));
	}

	public function hook_init()
	{
		// $this->post_type_banner();
		// $this->taxonomy_areas();
	}

	public function post_type_banner()
	{
		$labels = array(
			'name' => _x('Banners', 'post type general name', 'wordpress'),
			'singular_name' => _x('Banner', 'post type singular name', 'wordpress'),
			'add_new' => _x('Adicionar Novo', 'Banner', 'wordpress'),
			'add_new_item' => __('Adicionar Novo Banner', 'wordpress'),
			'edit_item' => __('Editar Banner', 'wordpress'),
			'new_item' => __('Novo Banner', 'wordpress'),
			'all_items' => __('Todos os Banners', 'wordpress'),
			'view_item' => __('Ver Banner', 'wordpress'),
			'search_items' => __('Procurar Banners', 'wordpress'),
			'not_found' =>  __('Nenhum Banner encontrado', 'wordpress'),
			'not_found_in_trash' => __('Nenhum Banner encontrado na Lixeira', 'wordpress'),
			'parent_item_colon' => '',
			'menu_name' => __('Banner', 'wordpress')
		);

		$config = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-slides',
			'exclude_from_search' => true,
			'supports' => array( 'title', 'thumbnail')
		);

		register_post_type('banners', $config);
	}

	public function taxonomy_areas()
	{
		$labels = array(
			'name' => _x( 'Área do Evento', 'taxonomy general name' ),
			'singular_name' => _x( 'Área do Evento', 'taxonomy singular name' ),
			'search_items' =>  __( 'Buscar Área do Evento' ),
			'all_items' => __( 'Todas as Categorias de Evento' ),
			'parent_item' => __( 'Categoria Pai' ),
			'parent_item_colon' => __( 'Categoria Pai:' ),
			'edit_item' => __( 'Editar Área do Evento' ),
			'update_item' => __( 'Atualizar Área do Evento' ),
			'add_new_item' => __( 'Adicionar Nova Área do Evento' ),
			'new_item_name' => __( 'New Genre Name' ),
			'menu_name' => __( 'Área do Evento' ),
		);

		$config = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'areas' )
		);

		register_taxonomy('areas',array('cursos'), $config);
	}

}

new Contents();