<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>

    </x-slot>
    <div>
        <div class="py-12">
            <div class="container">
                <div class="row">
{{--                    all categories--}}
                    <div class="col-md-8">
                        <div class="card">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session('success')}}</strong>
{{--                                    todo : the button not working - this is the x button on the category inserted succesfully--}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="card-header">All Categories</div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Category</th>
{{--                        <th scope="col">Email</th>--}}
{{--                        <th scope="col">Created At</th>--}}
                            <th scope="col">Edit &nbsp; &nbsp; &nbsp; Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->category_name}}</td>
{{--                            <td>{{$Customer->email}}</td>--}}
{{--                            <td>{{$Customer->created_at->diffForHumans()}}</td>--}}
                                <td>
                                    <a href="{{url('category/edit').$category->id }}" class="btn btn-outline-secondary">Edit</a>

                                    <a href="{{url('category/delete/'.$category->id)}}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                        </div>
                    </div>
{{--end all categories--}}

{{--                    add category--}}
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Add Category</div>

                                <form action="{{route('store.category')}}" method="POST">
                                    @csrf
                                    <br>
                                    <div class="form-group">
{{--                                        <label for="CategoryName"> Category name</label>--}}
                                        <input type="text" name="category_name" class="form-control" id="CategoryName" aria-describedby="CategoryName" placeholder="enter new category name" >
                                            @error('category_name')
                                                <span class="text-red-800">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <br>
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary">Add Category</button>
                                    </div>
                                </form>

                        </div>
                    </div>
{{--end add category--}}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
