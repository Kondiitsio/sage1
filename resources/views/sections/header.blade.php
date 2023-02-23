@php
  $image = \Roots\asset('images/konda.svg');

  $fb = get_field('facebook', 'option');
  $ig = get_field('instagram', 'option');
  $tw = get_field('twitter', 'option');
  $li = get_field('linkedin', 'option');
  $gh = get_field('github', 'option');
@endphp
<header>
  <div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="nav-logo">
        <a href="https://sage1.local/"><img src="{{ $image->uri() }}" alt="konda"></a>
      </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation']) !!}
    @endif

        <ul>
          <div class="some">
            @if($fb)
            <li><a href="#" target="_blank"><img class="h-6" src="@asset('images/fb.svg')" alt="Facebook"></a></li>
            @endif

            @if($ig)
            <li><a href="<?= $ig['url']; ?>" target="_blank"><img class="h-6" src="@asset('images/ig.svg')" alt="konda Instagram"></a></li>
            @endif

            @if($tw)
            <li><a href="<?= $tw['url']; ?>" target="_blank"><img class="h-6" src="@asset('images/tw.svg')" alt="konda Twitter"></a></li>
            @endif

            @if($li)
            <li><a href="<?= $li['url']; ?>" target="_blank"><img class="h-6" src="@asset('images/li.svg')" alt="konda LinkedIn"></a></li>
            @endif

            @if($gh)
            <li><a href="<?= $gh['url']; ?>" target="_blank"><img class="h-6" src="@asset('images/gh.svg')" alt="konda Github"></a></li>
            @endif
          </div>
        </ul>
      </nav>
  </div>
</header>




