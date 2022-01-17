<?php

namespace Nico\Components\contentImg;

function get_layout( $content = "", $className = "", $id = "", $block_name = "block", $marquee = false ){

    $className .= get_field('reverse') == true ? ' block-content-img--reverse' : '';

    $marquee = get_field('marquee');
    $marquee = $marquee ? "<div class=\"marquee\"><div class=\"marquee__words marqueeAni\">{$marquee}</div></div>" : '';

    $img_big = get_field('img_big') ?: 'Img Grande...';
    $img_small = get_field('img_small') ?: false;

    $img_big = isset($img_big['ID']) ? wp_get_attachment_image($img_big['ID'], 'medium-quad', false, array('class' => 'block-content-img__img block-content-img__img--big img-shadow')) : $img_big;
    $img_small = isset($img_small['ID']) ? wp_get_attachment_image($img_small['ID'], 'thumbnail', false, array('class' => 'bblock-content-img__img block-content-img__img--small img-shadow--above')) : $img_small;

    $id = esc_attr($id);
    $className = esc_attr($className);
    
    echo <<<HTML
        <section id="{$id}" class="block-content-img block-content-img {$block_name} {$className}">
            {$marquee}
            <div class="row align-justify align-middle">
                <div class="column small-12 medium-6 large-5 block-content-img__content">
                    {$content}
                </div>
                <div class="column small-12 medium-5 large-7 block-content-img__imgs">
                    <div class="imgAni--1">{$img_big}</div>
                    <div class="imgAni--2">{$img_small}</div>

                    <div class="bg-circle bg-circle--1 bg-circle--huge bg-circle--above circleAni-rev--2"></div>
                    <div class="bg-circle bg-circle--2 bg-circle--medium circleAni--3"></div>
                    <div class="bg-circle bg-circle--3 bg-circle--small bg-circle--light circleAni--1"></div>
                </div>
            </div>
        </section>
    HTML;
}