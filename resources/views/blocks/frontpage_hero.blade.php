@php
    /**
     * Block name: Frontpage Hero 
     **/
    $title      = get_sub_field('title');
    $ingress    = get_sub_field('ingress');
@endphp

<section id="hero" class="hero">
  <div class="hero-inner">
    <h1>{!! $title !!}</h1>
    <p>{!! $ingress !!}</p>
  </div>
</section>

