<?php

function sos_add_custom_metabox(){

	$id = 'sos_meta';
	$title = 'Candidate Meta';
	$callback = 'sos_meta_callback';
	$post_type = 'candidate';
	$content = 'normal'; // normal, advanced, side
	$priority = 'high';

	add_meta_box( $id, $title, $callback, $post_type, $content, $priority );

}

add_action( 'add_meta_boxes', 'sos_add_custom_metabox' );

function sos_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'sos_candidate_nonce' );
	$sos_stored_meta = get_post_meta( $post->ID );
	// var_dump($sos_stored_meta);
	// die();
	?>
		<div>
			<div class="meta-row">
				<div class="meta-th">
					<label for="candidate-id" class="sos-row-title">Candidate ID</label>
				</div>
				<div class="meta-td">
					<input type="text" name="candidate_id" id="candidate-id" value="<?php if( ! empty( $sos_stored_meta['candidate_id'] ) ) echo esc_attr( $sos_stored_meta['candidate_id'][0] ); ?>"/>
				</div>
			</div>
		</div>

		<div class="meta-row">
			<div class="meta-th">
				<label for="candidate-name" class="sos-row-title">Candidate Name</label>
			</div>
			<div class="meta-td">
				<input type="text" name="candidate_name" id="candidate-name" value="<?php if( ! empty( $sos_stored_meta['candidate_name'] ) ) echo esc_attr( $sos_stored_meta['candidate_name'][0] ); ?>"/>
			</div>
		</div>

		<div class="meta-row">
			<div class="meta-th">
				<label for="date-announced" class="sos-row-title">Date Announced</label>
			</div>
			<div class="meta-td">
				<input type="text" size="10" class="sos-row-content datepicker" name="date_announced" id="date-announced" value="<?php if( ! empty( $sos_stored_meta['date_announced'] ) ) echo esc_attr( $sos_stored_meta['date_announced'][0] ); ?>"/>
			</div>
		</div>

		<div class="meta-row">
			<div class="meta-th">
				<label for="candidate-occupation" class="sos-row-title">Occupation</label>
			</div>
			<div class="meta-td">
				<input type="text" class="sos-row-content" name="candidate_occupation" id="candidate-occupation" value="<?php if( ! empty( $sos_stored_meta['candidate_occupation'] ) ) echo esc_attr( $sos_stored_meta['candidate_occupation'][0] ); ?>"/>
			</div>
		</div>

		<div class="meta-row">
			<div class="meta-th">
				<label for="candidate-state" class="sos-row-title">State</label>
			</div>
			<div class="meta-td">
				<select name="candidate_state" id="candidate-state">
					<?php if( ! empty( $sos_stored_meta['candidate_state'] ) ): ?>
						<option value="<?php echo esc_attr( $sos_stored_meta['candidate_state'][0] ); ?>"><?php echo esc_attr( $sos_stored_meta['candidate_state'][0] ); ?></option>
					<?php else: ?>
						<option value="--"> - - - </option>
					<?php endif; ?>
					<option value="FL">Florida</option>
					<option value="NY">New York</option>
					<option value="OH">Ohio</option>
				</select>
				<!-- <input type="text" class="sos-row-content" name="candidate_state" id="candidate-state" value=""/> -->
			</div>
		</div>

		<div class="meta-row">
			<div class="meta-th">
				<!-- <label for="candidate-excerpt" class="sos-row-title">Candidate Excerpt</label> -->
				<span>Bio Excerpt</span>
			</div>
			<div class="meta-td">
				<!-- <input type="text" name="candidate_excerpt" id="candidate-excerpt" value="<?php if( ! empty( $sos_stored_meta['candidate_name'] ) ) echo esc_attr( $sos_stored_meta['candidate_excerpt'][0] ); ?>"/> -->
				<textarea name="candidate_excerpt" class="sos-textarea" id="candidate_excerpt"><?php if( ! empty( $sos_stored_meta['candidate_name'] ) ) echo esc_attr( $sos_stored_meta['candidate_excerpt'][0] ); ?></textarea>
			</div>
		</div>

		<div class="meta-row">
			<div class="meta-th">
				<span>Candidate BIO</span>
			</div>
		</div>
		<div class="meta-editor">
			<?php
				$content = get_post_meta( $post->ID, 'candidate_bio', true );
				$editor_id = 'candidate_bio';
				$settings = array(
					'textarea_rows'	=> 15,
					'media_buttons'	=>	false,
				);
				wp_editor( $content, $editor_id, $settings );
			?>
		</div>
	<?php
}

function sos_meta_save( $post_id ) {
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['sos_candidate_nonce'] ) && wp_verify_nonce( $_POST['sos_candidate_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ){
		return;
	}

	if ( isset( $_POST['candidate_id'] ) ) {
		$post_id = $post_id;
		$meta_key = 'candidate_id';
		$meta_value = sanitize_text_field( $_POST['candidate_id'] );
		$prev_value = '';
		update_post_meta( $post_id, $meta_key, $meta_value);
	}

	if ( isset( $_POST['candidate_name'] ) ) {
		update_post_meta( $post_id, 'candidate_name', sanitize_text_field( $_POST['candidate_name'] ));
	}

	if ( isset( $_POST['date_announced']) ) {
		update_post_meta( $post_id, 'date_announced', sanitize_text_field( $_POST['date_announced'] ) );
	}

	if ( isset( $_POST['candidate_occupation']) ) {
		update_post_meta( $post_id, 'candidate_occupation', sanitize_text_field( $_POST['candidate_occupation'] ) );
	}

	if ( isset( $_POST['candidate_state']) ) {
		update_post_meta( $post_id, 'candidate_state', sanitize_text_field( $_POST['candidate_state'] ) );
	}

	if ( isset( $_POST['candidate_excerpt'] ) ) {
		update_post_meta( $post_id, 'candidate_excerpt', sanitize_text_field( $_POST['candidate_excerpt'] ));
	}

	if ( isset( $_POST['candidate_bio'] ) ) {
		update_post_meta( $post_id, 'candidate_bio', sanitize_text_field( $_POST['candidate_bio'] ));
	}



}
add_action( 'save_post', 'sos_meta_save' );