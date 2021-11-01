<ul>
    <div id="app">
    @foreach($childs as $child)
        <li>


                <app :id={{$child->id}}>{{ $child->title }}</app>

        @if(count($child->childs))
                @include('manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</div>
    </ul>
