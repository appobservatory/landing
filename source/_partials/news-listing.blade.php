<div id="updates" class="bg-white pt-16 pb-5 px-4 sm:px-6 lg:pt-24 lg:pb-7 lg:px-8">
  <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
    <div>
      <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Updates</h2>
      <div class="mt-3 sm:mt-4">
        <p class="text-xl text-gray-500">Check out the latest updates from App Observatory's developer.</p>
      </div>
    </div>
    <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
      @foreach($updates as $update)
      <div>
        <p class="text-sm text-gray-500">
          <time datetime="{{ $update->date }}">{{ date('F d, Y', strtotime($update->date)) }}</time>
        </p>
        <a href="{{ $update->getPath() }}" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900">{{ $update->title }}</p>
          <p class="mt-3 text-base text-gray-500">{{ $update->heading }}</p>
        </a>
        <div class="mt-3">
          <a href="{{ $update->getPath() }}" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
            Read more
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
