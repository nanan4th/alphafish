@include('foods.navigation')

        <h1>All the foods</h1>

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
                    <th class="text-center">Price</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Photo</th>
                    <th width="280px" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $key => $value)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->price }}</td>
                    <td>{{ $value->category }}</td>
                    <td>{{ $value->desc }}</td>
                    <td class="text-center"><img src="{{asset('image/foods/')}}/{{$value->image}}" alt="" style="max-width:80px;"></td>

                    <td class="text-center">
                        <form action="{{ route('foods.delete',$value->id) }}" method="post">
                            <!-- show detail -->
                            <a class="btn btn-small btn-success" href="{{route('foods.show',$value->id)}}">Show</a>

                            <!-- edit food -->
                            <a class="btn btn-small btn-info" href="{{route('foods.edit',$value->id)}}">Edit</a>

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
        {{$foods->render()}}
    </div>
</body>

</html>