<h1>fill this and updated detail in this form </h1>

<form action="{{ route('testing.update',$testing->id()) }}" method="post">
    @csrf
    @method('put')
    <label for="name">testing name</label>
    <input type="text" name="testing_name" value="{{ old('test_name',$testing->test_name) }}">
    <button type="submit">submit update</button>
</form>
