@php
  $fb = get_field('facebook', 'option');
  $ig = get_field('instagram', 'option');
  $tw = get_field('twitter', 'option');
  $li = get_field('linkedin', 'option');
  $gh = get_field('github', 'option');

  $copyright = get_field('copyright', 'option');
@endphp

<footer class="content-info">
  <p>{!! $copyright !!}</p>
    <div class="footersome gap-4">
      @if($fb)
        <a href="#" target="_blank"><img class="h-6" src="@asset('images/fb.svg')" alt="Facebook"></a>
      @endif

      @if($ig)
        <a href="<?= $ig['url']; ?>" target="_blank"><img class="h-6" src="@asset('images/ig.svg')" alt="konda Instagram"></a>
      @endif

      @if($tw)
        <a href="<?= $tw['url']; ?>" target="_blank"><img class="h-6" src="@asset('images/tw.svg')" alt="konda Twitter"></a>  
      @endif

      @if($li)
        <a href="<?= $li['url']; ?>" target="_blank"><img class="h-6" src="@asset('images/li.svg')" alt="konda LinkedIn"></a>
      @endif

      @if($gh)
        <a href="<?= $gh['url']; ?>" target="_blank"><img class="h-6" src="@asset('images/gh.svg')" alt="konda Github"></a>
      @endif
    </div>
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
</footer>
