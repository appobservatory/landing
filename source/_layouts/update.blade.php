@extends('_layouts.main')

@section('body')
<div class="text-center space-y-4 max-w-7xl mx-auto py-16 md:grid md:grid-cols-3 md:items-center md:space-y-0">
  <a class="text-base font-semibold text-indigo-600 hover:text-indigo-500" href="/">&LeftArrow; Back Home</a>
  <img class="mx-auto block h-8 w-auto" src="/assets/images/logo-full.svg" alt="App Observatory">
  <div></div>
</div>
<div class="min-h-screen relative py-16 bg-white overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
    <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
      <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none"
        viewBox="0 0 404 384">
        <defs>
          <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"
            patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
      </svg>
      <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384"
        fill="none" viewBox="0 0 404 384">
        <defs>
          <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
            patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
      </svg>
      <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none"
        viewBox="0 0 404 384">
        <defs>
          <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"
            patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
      </svg>
    </div>
  </div>
  <div class="relative px-4 sm:px-6 lg:px-8">
    <div class="text-lg max-w-prose mx-auto">
      <h1>
        <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">
          Update &mdash; {{ date('F d, Y', strtotime($page->date)) }}
        </span>
        <span
          class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{
          $page->title }}</span>
      </h1>
      <h2 class="mt-8 text-xl text-gray-500 leading-8">{{ $page->heading }}</h2>
    </div>
    <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
      @yield('updateContent')
    </div>
  </div>
</div>
@endsection
