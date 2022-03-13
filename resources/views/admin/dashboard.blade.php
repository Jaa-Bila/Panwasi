<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(count($user_asi) > 0)
                    @foreach($user_asi as $stud)
                    <div class="card card-body bg-light">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header"
                                    style="position: relative;
                                            height: 10vh">
                                        <div class="card-body" style="font-family: 'Nunito Sans', sans-serif;">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h3 class="vertical-center"><i class="fa-solid fa-user fa-lg" ></i>&nbsp;{{$stud->name}}</h3>
                                                </div>
                                                <div class="col-2">
                                                </div>
                                                <div class="col-4">
                                                    <div class="float-end" style="padding-right: 10vh;">
                                                        <a href="/pasien/{{$stud->id}}" class="btn btn-secondary vertical-center">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-body" style="font-family: 'Nunito Sans', sans-serif;">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>ID</p>
                                            <p>Nama</p>
                                            <p>Email</p>
                                        </div>
                                        <div class="col-8">
                                            <p>&nbsp;&nbsp; : {{$stud->id}}</p>
                                            <p>&nbsp;&nbsp; : {{$stud->name}}</p>
                                            <p>&nbsp;&nbsp; : {{$stud->email}}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else 
                    <p>No Studs</P>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
