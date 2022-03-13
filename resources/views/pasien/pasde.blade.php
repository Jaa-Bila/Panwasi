<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{$pasien->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card card-body bg-light">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"
                                style="position: relative;
                                        height: 10vh">
                                    <div class="card-body" style="font-family: 'Nunito Sans', sans-serif;">
                                        <div class="row">
                                            <div class="col-6">
                                                <h3 class="vertical-center">Bulan {{$months->bulan}}</h3>
                                            </div>
                                            <div class="col-2">
                                                </div>
                                                <div class="col-4">
                                                    <div class="float-end" style="padding-right: 10vh;">
                                                        <a href="/pasien/{{$pasien->id}}" class="btn btn-secondary vertical-center">Back</a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-body" style="font-family: 'Nunito Sans', sans-serif;">
                                <div class="container-tanggal" style="display:flex; flex-wrap:wrap; justify-content:center;" >
                                    @if(count($haris) > 0)
                                        @foreach($haris as $hari)
                                        <div class="tanggal" style="height: 9.5vh; width:9.5vh;"> 
                                            <h3>
                                                <a href="/pasien/{{$pasien->id}}/{{$months->id}}/{{$hari->id}}" class="btn btn-primary" style="height: 8vh; width:8vh; line-height:6vh;">{{$hari->hari}}</a>
                                            
                                            </h3>
                                        </div>
                                        @endforeach
                                    @else 
                                        <p>No Studs</P>
                                    @endif                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
