<div class="wrap">

	<h1><?php _e( 'Rbt Functionality Main Page', 'rbtfunct' ) ?></h1>
<?php
//данные из таблицы базы
$data =  Rbtfunct_Admin::get_content();
$content = $data['content'] ?? '';
$id = $data['id'] ?? 0;
//var_dump( $data)
?>
	<form action="<?php echo admin_url( 'admin-post.php' ) ?>" method="post">
		<?php wp_editor( $content, 'wp_editor', array(
			'textarea_name' => 'rbtfunct_content',
			'textarea_rows' => 10,
		) ); ?>
 
		<?php 
		// набор скрытых полей с генерированным ключом, чтобы проверить от аттак 
		wp_nonce_field( 'rbtfunct_action', 'rbtfunct_nonce' ) ?>
		<input type="hidden" name="rbtfunct_id" value="<?php echo $id ?>">
		 <!-- save_content для идентификации формы -->
		<input type="hidden" name="action" value="save_content">

		<p class="submit">
			<button class="button button-primary" type="submit">
				<?php _e( 'Save', 'rbtfunct' ) ?>
			</button>
		</p>
	</form>
</div>
