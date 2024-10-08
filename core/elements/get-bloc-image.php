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
    $image_caption = $image_only['caption'];
    $fluxi_content_image = '';

    $fluxi_content_image .= '<a href="' . $image_only['sizes']['large'] . '" class="js-is-lightbox">';
    $fluxi_content_image .= fx_get_lazy_img($image_only, true, false, true, 'c-figure');
    $fluxi_content_image .= '</a>';

    return $fluxi_content_image;
}
