<?php

/**
 * get_bloc_citation
 *
 *  @type	function
 *  @date	16/06/16
 *  @since	1.0.0
 *
 *  @param INT $post_id
 *  @return HTML - ACF citation fields
 */

function get_bloc_citation()
{

    $fluxi_content_citation = get_sub_field('citation');
    $output = '';

    if ($fluxi_content_citation):
        $author = false;
        $modifier_photo = 'centre';
        if (get_sub_field('ajouter_auteur')) :
            $author = get_sub_field('auteur');
            $fluxi_content_citation = '"' . $fluxi_content_citation . '"';
            if ($author['photo']) :
                $modifier_photo = $author['position_photo'];
            endif;
        endif;

        $output .= '<figure class="fc__blockquote">';
        $output .= '<span class="fc__blockquote__deco fc__blockquote__deco--top"></span>';
        $output .= '<blockquote class="fc__blockquote__text">' . $fluxi_content_citation . '</blockquote>';
        $output .= '<span class="fc__blockquote__deco fc__blockquote__deco--bottom"></span>';
        if ($author) :
            $output .= '<div class="fc__blockquote__author">';
            if ($author['photo']) :
                $output .= '<div class="fc__blockquote__photo -' . $modifier_photo . '">' . fx_get_lazy_img($author['photo']) . '</div>';
            endif;
            $output .= '<div class="fc__blockquote__name">';
            $output .= '<span class="name">' . $author['nom'] . '</span>';
            if ($author['fonction']) :
                $output .= '<span class="role">' . $author['fonction'] . '</span>';
            endif;
            $output .= '</div>';
            $output .= '</div>';
        endif;
        $output .= '</figure>';

        return $output;

    endif;
}
