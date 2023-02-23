@php
    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'article-image');
    $post_date = get_the_date('d.m.Y', get_the_ID());
    // $author = get_the_author();
@endphp

<article @php(post_class())>
  <header>
    @include('partials.entry-meta')
  </header>

<!--Title-->
	<div class="text-center pt-16 md:pt-32">
		<p class="text-sm md:text-base text-green-500 font-bold">{!! $post_date !!} {{-- <span class="text-gray-900">/</span> {!! $author !!}</p> --}}
		<h1 class="font-bold break-normal text-3xl md:text-5xl">{!! $title !!}</h1>
	</div>

	<!--image-->
	<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded height: 75vh;">
    <img src="{!! $featured_image !!}" alt="">
  </div>
	
	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-32">
		<div class="mx-0 sm:mx-6">
			<div class="relative bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal">
				
				<!--Post Content-->
				@php(the_content())

        <!--Source List-->
        <?php if( have_rows('sources') ): ?>
          <ul class="mt-8">
          <?php while( have_rows('sources') ) : the_row();
            $link = get_sub_field('source');
          ?>      
            <li>
                <?php
                if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  <a href="{!! esc_url( $link_url ); !!}" target="{!! esc_attr( $link_target ); !!}">{!! esc_html( $link_title ); !!}</a>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
				
        <!--Post Navigation-->
          <?php the_post_navigation( array(
            'prev_text'  => __( '← %title' ),
            'next_text'  => __( '%title →' ),
            ) );
          ?>
          <div class="all-posts flex mt-4"><a href="https://sage1.local/blog/">← All Posts</a></div>

      </div>
    </div> 
  </div>
</article>


      