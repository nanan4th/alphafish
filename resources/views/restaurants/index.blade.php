@include('restaurants.navigation')
<div class="container">
    <h1>All the restaurants</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
        @endif

        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="20px" class="text-center">No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Image</th>
                    <th class="text-center" width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $key => $value)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ $value->desc }}</td>
                    <td class="text-center"><img src="{{asset('image/restaurants/')}}/{{$value->image}}" alt="" style="max-width:80px;"></td>

                    <td class="text-center">
                        <form action="{{ route('restaurants.delete',$value->id) }}" method="post">
                            <!-- show detail -->
                            <a class="btn btn-small btn-success" href="{{route('restaurants.show',$value->id)}}">Show</a>

                            <!-- edit restaurants -->
                            <a class="btn btn-small btn-info" href="{{route('restaurants.edit',$value->id)}}">Edit</a>

                            <!-- delete -->
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$restaurants->render()}}
</div>
</body>
</html>