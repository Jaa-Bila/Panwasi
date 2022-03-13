<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bulan ') }}{{$months->bulan}}
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
                                                <h3 class="vertical-center">Tanggal {{$haris->hari}}</h3>
                                            </div>
                                            <div class="col-2">
                                                </div>
                                                <div class="col-4">
                                                    <div class="float-end" style="padding-right: 10vh;">
                                                        <a href="{{ URL::previous() }}" class="btn btn-secondary vertical-center">Back</a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-body" style="font-family: 'Nunito Sans', sans-serif;">
                                <div class="row">
                                    <div class="col-4">
                                        <p>Jam</p>
                                        <p>Foto</p>
                                    </div>
                                    <div class="col-8">
                                        <p>&nbsp;&nbsp; : 
                                            @if(is_null($image)) 
                                                <p>Belum ada Data</P>
                                            @else
                                                {{$image->created_at}}
                                                <img src="/public/storage/camera/{{$image->camera}}" class="img-fluid img-thumbnail"
                                                style="border: 1px solid #ddd;
                                                border-radius: 4px;
                                                padding: 5px;
                                                width: 80vh;">
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
