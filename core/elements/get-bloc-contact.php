<?php

/**
 * get_bloc_contact
 *
 *  @type	function
 *  @date	17/01/17
 *  @since	1.0.0
 *
 *  @param INT $post_id
 *  @return HTML - ACF contact fields
 */

function get_bloc_contact()
{

    $equipier_referent = get_sub_field('equipier_referent');
    $equipier_id = $equipier_referent[0];
    $descriptif_contact = get_sub_field('descriptif_contact');


    if ($equipier_referent):
        $photo = get_field('photo', $equipier_id);

        $output = '<div class="c-newsH c-newsH--contact fc__item fc__contact">';
        $output .= '<div class="c-newsH__img -round">' . fx_get_lazy_img($photo) . '</div>';
        $output .= '<div class="c-newsH__body">';
        $output .= '<span class="c-newsH__body__meta">Contact</span>';
        $output .= '<h1 class="c-newsH__body__title">' . get_the_title($equipier_id) . '</h1>';
        $output .= '<p class="c-newsH__body__desc">' . $descriptif_contact . '</p>';
        $output .= '<span class="c-link c-link--more -email c-newsH__body__link">' . get_field('mail_contact', $equipier_id) . '</span>';
        $output .= '</div>';
        $output .= '</div>';

        return $output;

    endif;
}
