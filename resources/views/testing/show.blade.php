<h1>fill this form </h1>

<a href="{{ route('testing.edit',['username'=>Auth::user()->username]) }}">Edit Testing</a>


<a href="{{ route('testing.index',['username'=>Auth::user()->username]) }}">all list</a>


<form action="{{ route('testing.store',['username'=>Auth::user()->username]) }}" method="post">
    @csrf
    <label for="name">testing name</label>
    <input name="testing_name" type="text">
</form>

