<?php


/**
 * get_bloc_galerie
 *
 *  @type	function
 *  @date	17/06/16
 *  @since	1.0.0
 *
 *  @param  N/A
 *  @return HTML - ACF galerie fields
 */


function get_bloc_galerie()
{

    $galerie = get_sub_field('galerie');

    if ($galerie):
        $type_galerie = 'galerie_vignettes';
        $fluxi_content_galerie = '';

        if ($type_galerie == 'galerie_damier'):
            $fluxi_content_galerie .= '<aside class="fc__gallery"><div class="c-gallery js-gallery-damier">';
            foreach ($galerie as $image):
                $fluxi_content_galerie .= '<a href="' . $image['sizes']['large'] . '" data-sub-html="' . $image['caption'] . '">' . fx_get_lazy_img($image) . '</a>';
            endforeach;
            $fluxi_content_galerie .= '</div></aside>';

        elseif ($type_galerie == 'galerie_vignettes'):
            $fluxi_content_galerie .= '<aside class="fc__gallery"><ul class="c-gallery js-gallery-vignettes">';
            foreach ($galerie as $image):
                $fluxi_content_galerie .= '<li data-thumb="' . $image['sizes']['thumbnail'] . '" data-src="' . $image['sizes']['medium'] . '" data-sub-html="' . $image['caption'] . '">' . fx_get_lazy_img($image) . '</li>';
            endforeach;
            $fluxi_content_galerie .= '</ul></aside>';

        else:
            $fluxi_content_galerie .= '<aside class="fc__gallery"><ul class="c-gallery js-gallery-slider">';
            foreach ($galerie as $image):
                $fluxi_content_galerie .= '<li data-thumb="' . $image['sizes']['thumbnail'] . '" data-src="' . $image['sizes']['medium'] . '" data-sub-html="' . $image['caption'] . '">' . fx_get_lazy_img($image) . '</li>';
            endforeach;
            $fluxi_content_galerie .= '</ul></aside>';

        endif;

        return $fluxi_content_galerie;

    endif;
}
