<?php

	/**
	 * get_bloc_citation
	 *
	 *  @type	function
	 *  @date	23/07/24
	 *  @since	1.0.0
	 *
	 *  @param INT $post_id
	 *  @return HTML - ACF citation fields
	 */

	function get_bloc_citation(){		
		
		$fluxi_content_citation = '';

		$text_citation = get_sub_field('citation');

		$auteur = get_sub_field('auteur');
		$nom_auteur = $auteur['nom'] ?? '';
		$fonction_auteur = $auteur['fonction'] ?? '';
		$photo_auteur = $auteur['photo'] ?? '';
		$url_image = $photo_auteur['sizes']['medium'] ?? '';

		if ($text_citation) :

			$fluxi_content_citation = '<blockquote class="fc__blockquote"><span class="fc__blockquote__deco fc__blockquote__deco--top"></span>'.$text_citation.'<span class="fc__blockquote__deco fc__blockquote__deco--bottom"></span>';

			if ($nom_auteur || $fonction_auteur || $photo_auteur) :				
				if ($url_image) :
					$fluxi_content_citation .= '<img class="c-figure__img" src="'.$url_image.'">';
				endif;
				if ($nom_auteur) :
					$fluxi_content_citation .= '<span>'.$nom_auteur.'</span>';
				endif;
				if ($fonction_auteur) :
					$fluxi_content_citation .= '<span>'.$fonction_auteur.'</span>';
				endif;
			endif;

			$fluxi_content_citation .= '</blockquote>';

			return $fluxi_content_citation;	

		endif;	
		
	}

?>