@foreach(App\Categories::all() as $category)
    <li><a href="categories/{{$category->latin_url}}">{{$category->name}}</a></li>
@endforeach
