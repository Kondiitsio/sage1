{{-- Render flexible blocks --}}
@if(get_field('add_block'))
    @if(have_rows('add_block'))
        @while(have_rows('add_block'))
        @php
            the_row();
        @endphp
        @includeIf('blocks.'. get_row_layout())
        @endwhile
    @endif
@endif
