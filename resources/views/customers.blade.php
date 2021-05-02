<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <b style="float:right;">Total Customers:
                <span>{{count($Customers)}}</span>
            </b>

        </h2>
    </x-slot>
            <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($Customers as $Customer)
                        <tr>
                            <th scope="row">{{$Customer->id}}</th>
                            <td>{{$Customer->name}}</td>
                            <td>{{$Customer->email}}</td>
                            <td>{{$Customer->created_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                    {{--                    <tr>--}}
                    {{--                        <th scope="row">2</th>--}}
                    {{--                        <td>Jacob</td>--}}
                    {{--                        <td>Thornton</td>--}}
                    {{--                        <td>@fat</td>--}}
                    {{--                    </tr>--}}
                    {{--                    <tr>--}}
                    {{--                        <th scope="row">3</th>--}}
                    {{--                        <td colspan="2">Larry the Bird</td>--}}
                    {{--                        <td>@twitter</td>--}}
                    {{--                    </tr>--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
