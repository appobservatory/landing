@extends('_layouts.main')
@section('body')
<div class="text-center space-y-4 max-w-7xl mx-auto py-16 md:grid md:grid-cols-3 md:items-center md:space-y-0">
  <a class="text-base font-semibold text-indigo-600 hover:text-indigo-500" href="/">&LeftArrow; Back Home</a>
  <img class="mx-auto block h-8 w-auto" src="/assets/images/logo-full.svg" alt="App Observatory">
  <div></div>
</div>
<div class="py-16 mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
  @yield('content')
</div>
@endsection
