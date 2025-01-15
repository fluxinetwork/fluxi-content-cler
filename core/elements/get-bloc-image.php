<?php

/**
 * get_bloc_image
 *
 *  @type	function
 *  @date	16/06/16
 *  @since	1.0.0
 *
 *  @param  INT - $post_id
 *  @return HTML - ACF image fields
 */

function get_bloc_image()
{

    $image_only = get_sub_field('image');
    $no_margin_top = (get_sub_field('supprimer_marge_superieure')) ? 'mt-none' : '';
    $image_caption = $image_only['caption'];
    $fluxi_content_image = '';

    $fluxi_content_image .= fx_get_lazy_img($image_only, true, false, true, 'c-figure ' . $no_margin_top);

    return $fluxi_content_image;
}
