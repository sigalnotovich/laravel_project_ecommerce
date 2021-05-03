<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>

    </x-slot>
    <div>
        <div class="py-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Edit Product</div>

                            <form action="{{url('Products/update/'.$products->id)}}" method="POST">
                                @csrf
                                <br>
                                <div class="form-group">
                                    <label for="UpdateProductName">Update Product</label>
                                    <br>
                                    <input type="text" name="Update_Product_name"
                                           class="form-control" id="UpdateCategoryName"
                                           aria-describedby="UpdateCategoryName"
                                           value="{{$products->name}}">
{{--                                            todo:--}}
{{--                                            @error('Update_category_name')--}}
{{--                                            <span class="text-red-800">{{$message}}</span>--}}
{{--                                            @enderror--}}
                                    <br>
                                    <label for="UpdateProductName">Update Product price</label>
                                    <input type="text" name="Update_Product_price"
                                           class="form-control" id="UpdateCategoryName"
                                           aria-describedby="UpdateCategoryName"
                                           value="{{$products->price}}">
{{--                                            todo:--}}
{{--                                            @error('Update_category_name')--}}
{{--                                            <span class="text-red-800">{{$message}}</span>--}}
{{--                                            @enderror--}}
                                    <label for="UpdateProductName">Update Product description</label>
                                    <input type="text" name="Update_Product_description"
                                           class="form-control" id="UpdateCategoryName"
                                           aria-describedby="UpdateCategoryName"
                                           value="{{$products->description}}">
                                    {{--                                            todo:--}}
                                    {{--                                            @error('Update_category_name')--}}
                                    {{--                                            <span class="text-red-800">{{$message}}</span>--}}
                                    {{--                                            @enderror--}}
                                </div>
                                <br>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
