<!DOCTYPE html>
<html>
<head>
	<title>Treeview</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/treeview.css" rel="stylesheet">
</head>
<body>
    <div class="mt-5 d-flex justify-content-center">
        <div class="border w-75 p-3 border-success">
            <div class="container p-5 d-flex justify-content-center">
                <h3>Laravel + Vue.js TreeView</h3>
            </div>
            <div class="container w-100 d-flex justify-content-center">
                <div id="app">
                <ul id="tree1">
                @empty($allCategories)
                <item-management></item-management>
                @endempty
                    @foreach($categories as $category)
                        <li>
                            <item-management :id={{$category->id}} :parent_id={{$category->parent_id}}>{{ $category->title }}</item-management>
                            @if(count($category->childs))
                                @include('manageChild',['childs' => $category->childs])
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
    </div>
</div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
