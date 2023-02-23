@php
    /**
     * Block name: Posts 
     **/
	$featured_image = get_the_post_thumbnail_url(get_the_ID(), 'article-image');
    $title          = get_the_title();

    $posts = get_posts(array(
    'numberposts'   => -1,
    'post_type'     => 'post',
    'status'        => 'publish'
    ));
@endphp

<div class="leading-normal tracking-normal">
    <!--Header-->
    <div class="blog w-full m-0 p-0 h-40 md:h-80">
        <div class="container max-w-4xl mx-auto pt-28 md:pt-48 text-center break-normal">
            <!--Title-->
            <h1 class="text-black">
                {!! $title !!}
            </h1>
        </div>
    </div>
    <!--Container-->
    <div class="container px-4 md:px-0 mx-auto pb-12">
        <div class="mx-0">
            <!--Posts Container-->
            <div class="flex flex-wrap pt-12">
               
<?php
 if($posts) {
    foreach($posts as $post) {
        $link           = get_permalink($post->ID);
        $featured_image = get_the_post_thumbnail($post->ID);
        $post_title     = get_the_title($post->ID);
        $post_excerpt   = get_the_excerpt($post->ID);
?>

            <div class="card w-full md:w-1/3 p-6 flex flex-col flex-shrink">
                    <div class="flex-1 bg-white overflow-hidden shadow-lg">
                        <a class="flex flex-wrap no-underline hover:no-underline" href="{!! $link !!}">
                            <div class="w-full rounded-t pb-6">
                                {!! $featured_image !!}
                            </div>
                            <h3 class="w-full px-6">{!! $post_title !!}</h3>
                            <p class="text-base px-6 mb-5">
                                {!! $post_excerpt !!}
                            </p>
                        </a>
                    </div>
                </div>
<?php } } ?>  
            </div>
        </div>
    </div>
</div>