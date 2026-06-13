@if ($testing_data->count()>0)

@foreach ($testing_data as $data)

    <p>{{ $data->test_name }}</p>
    <p><a href="{{ route('testing.edit',$data->id) }}">update</a></p><br>



@endforeach

@else
<h1>no data found</h1>
@endif



