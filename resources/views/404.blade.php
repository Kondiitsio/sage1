@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @if (! have_posts())
  <div class="leading-normal tracking-normal">
    <x-alert class="w-full m-0 p-0 h-48 md:h-80" type="warning">
      <div class="container max-w-4xl mx-auto pt-28 md:pt-48 text-center break-normal">
      <h1>{!! __('Sorry, but the page you are trying to view does not exist.') !!}</h1>
      </div>
    </x-alert>
  </div>
    {{-- {!! get_search_form(false) !!} --}}
  @endif
@endsection
