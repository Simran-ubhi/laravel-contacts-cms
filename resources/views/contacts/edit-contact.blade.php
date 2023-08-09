@include('_layout.header')

<h2>Edit Contact</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('edit_contact', $data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name: </label>
    <input type="text" name="name" value="{{$data->name}}">

    <label for="image">Image: </label>
    <input type="file" name="image">

    <label for="DOB">Date of Birth: </label>
    <input type="date" name="DOB" value="{{$data->DOB}}">

    <label for="address">Address: </label>
    <input type="text" name="address" value="{{$data->address}}">

    <label for="email">Email: </label>
    <input type="email" name="email" value="{{$data->email}}">

    <label for="phone">Phone no.: </label>
    <input type="number" name="phone" value="{{$data->phone}}">

    <input type="submit" value="Add">
</form>


@include('_layout.footer')
