<?php

namespace Nico\Components\coverSmall;

function get_layout( $title = null, $bg_id = null, $link = null, $className = "", $id = "" ){

    global $post;

    $id = esc_attr($id);
    $className = esc_attr($className);

    $bg_id = $bg_id ? $bg_id : get_post_thumbnail_id($post);
    $bg = $bg_id ? wp_get_attachment_image($bg_id, 'full', false, array('class' => 'wp-block-cover-small__image-background')) : "";

    $title = $title ? $title : get_the_title($post);

    $back_link_label = isset($link['title']) ? $link['title'] : __('Back', 'Nhood');
    $back_link_url = isset($link['url']) ? $link['url'] : "javascript:history.go(-1)";
    $back_link_target = isset($link['target']) ? $link['target'] : "";
    
    echo <<<HTML
        <div id="{$id}" class="wp-block-cover-small {$className}">
            {$bg}
            <div class="column small-12 wp-block-cover-small__content">
                <div class="row align-justify align-bottom">
                    <div class="column small-12 large-8">
                        <h1>{$title}</h1>
                    </div>
                    <div class="column shrink">
                        <a href="{$back_link_url}" target="{$back_link_target}" class="button--back">{$back_link_label}</a>
                    </div>
                </div>
            </div>
        </div>
    HTML;
}