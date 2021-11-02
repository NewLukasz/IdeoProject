<ul>
    <div id="app">
    @foreach($childs as $child)
        <li>
        <item-management :id={{$child->id}} :parent_id={{$child->parent_id}}>{{ $child->title }}</item-management>
        @if(count($child->childs))
                @include('manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
    </div>
</ul>
