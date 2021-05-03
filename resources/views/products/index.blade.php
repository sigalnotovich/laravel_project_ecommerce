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
                    <div class="col-md-9">
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

                            <div class="card-header">All Products</div>

                            <table class="table">
                                <thead>
                                <tr>
{{--                                    <th scope="col">SL No</th>--}}
                                    <th scope="col">Product name</th>
{{--                                    <th scope="col">image url</th>--}}
                                    <th scope="col">price</th>
                                    <th scope="col">description</th>
{{--                                    <th scope="col">Action</th>--}}
                                    <th scope="col">edit</th>
                                    <th scope="col">delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $product)
                                    <tr>
{{--                                        <th scope="row">{{$product->id}}</th>--}}
                                        <td>{{$product->name}}</td>
{{--                                        <td>{{$product->image}}</td>--}}
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>
                                            <a href="{{url('Products/edit').$product->id }}" class="btn btn-outline-secondary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{url('Products/delete/'.$product->id)}}" class="btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{--end all Products--}}

                    {{--                    add Product--}}
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">Add Product</div>

                            <form action="{{route('store.Product')}}" method="POST">
                                @csrf
                                <br>
                                <div class="form-group">
                                    <label for="ProductName"> Product name</label>
                                    <input type="text" name="name" class="form-control" id="ProductName" aria-describedby="CategoryName" placeholder="enter new product name" >
                                    @error('name')
                                    <span class="text-red-800">{{$message}}</span>
                                    @enderror
                                </div>
                                <br>
{{--                                <div class="form-group">--}}
{{--                                    <label for="CategoryName"> Product image url</label>--}}
{{--                                    <input type="text" name="image" class="form-control" id="CategoryName" aria-describedby="CategoryName" placeholder="enter new product price" >--}}
{{--                                    @error('image')--}}
{{--                                    <span class="text-red-800">{{$message}}</span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <br>--}}
                                <div class="form-group">
                                    <label for="ProductDescription"> Product price</label>
                                    <input type="text" name="price" class="form-control" id="ProductDescription" aria-describedby="CategoryName" placeholder="enter new product price" >
                                    @error('price')
                                    <span class="text-red-800">{{$message}}</span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="ProductDescription"> Product description</label>
                                    <input type="text" name="description" class="form-control" id="ProductDescription" aria-describedby="CategoryName" placeholder="enter new product description" >
                                    @error('description')
                                    <span class="text-red-800">{{$message}}</span>
                                    @enderror
                                </div>
                                <br>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Add Product</button>
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
