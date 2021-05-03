<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>

    </x-slot>
    <div>
        <div class="py-12">
            <div class="container">
                <div class="row">
                    {{--                    add category--}}
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Edit Category</div>

                            <form action="{{url('category/update/'.$categories->id)}}" method="POST">
                                @csrf
                                <br>
                                <div class="form-group">
                                    <label for="UpdateCategoryName">Update Category name</label>
                                    <br>
                                    <input type="text" name="Update_category_name"
                                           class="form-control" id="UpdateCategoryName"
                                           aria-describedby="UpdateCategoryName"
                                           value="{{$categories->category_name}}">
{{--                                    todo:--}}
{{--                                    @error('Update_category_name')--}}
{{--                                    <span class="text-red-800">{{$message}}</span>--}}
{{--                                    @enderror--}}
                                </div>
                                <br>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
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
