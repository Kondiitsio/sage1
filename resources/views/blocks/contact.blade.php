@php
    /**
     * Block name: Contact 
     **/
    $title      = get_sub_field('otsikko');
    $ingress    = get_sub_field('ingressi');
    $email      = get_sub_field('sahkoposti');
    $number     = get_sub_field('numero');
@endphp

<section class="contact">
    <div class="row">
        <h2>{!! $title !!}</h2>
         <div class="contact-subheader">
             <p>{!! $ingress !!}</p>
         </div>
         <div class="contact-info">
             <p>{!! $email !!}</p><p>{!! $number !!}</p>
         </div>
    </div>
</section>