
<ul {{$attributes(['class'=>""])}}>
    <a href="{{route('about')}}"><li>O nas</li></a>
    <a href="{{route('offer')}}"><li>Nasza Misja</li></a>
    <a href="{{route('gallery')}}"><li>Galeria</li></a>
    <a href="{{route('gallery')}}"><li>Dołącz do nas</li></a>
    <a href="{{route('contact')}}"><li>Kontakt</li></a>
    <div class="md:hidden flex gap-4 mt-10">
        <x-socialItems/>
    </div>
</ul>

