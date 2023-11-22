
<x-layouts.master>
  @section('title', 'Tatra Light')
    <!--HEADER -->
    @include('pages.home.partials.header')

    <!--MAIN -->
    <main>
        @include('pages.home.partials.offer')
        @include('pages.home.partials.about')
        @include('pages.home.partials.contact')

    </main>

</x-layouts.master>
