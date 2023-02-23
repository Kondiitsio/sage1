@php
    /**
     * Block name: Image cta
     **/
    $title          = get_sub_field('title');
    $link           = get_sub_field('link');
    $image          = get_sub_field('image');
    $size    = 'full'; // (thumbnail, medium, large, full or custom size)
@endphp

<section class="imagecta">
    <div class="row flex items-center">
        <div class="column left">
            @php
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
            @endphp
          </div>
          <div class="column right">
            <h2>{!! $title !!}</h2>
            <button><a href="{{ $link['url'] }}" target="{{ $link['target'] }}">{{ $link['title'] }}</a></button>
        </div>
    </div>
</section>