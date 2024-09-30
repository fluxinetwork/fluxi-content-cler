<?php

/**
 * get_bloc_texte_image
 *
 *  @type	function
 *  @date	16/06/16
 *  @since	1.0.0
 *
 *  @param  INT - $post_id
 *  @return HTML - ACF fields image + texte
 */

function get_bloc_texte_image()
{

    $image_txt = get_sub_field('image');
    $txt_txt = get_sub_field('texte');
    $fluxi_content_texte_image = '';

    if ($txt_txt):

        $fluxi_content_texte_image .= fx_get_lazy_img($image_txt, false, false, false, 'fc__img_float');
        $fluxi_content_texte_image .= $txt_txt;

        return $fluxi_content_texte_image;

    endif;
}
