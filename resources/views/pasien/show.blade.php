<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{$pasien->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if(count($months) > 0)
                    @foreach($months as $month)
                    <div class="card card-body bg-light">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header"
                                    style="position: relative;
                                            height: 10vh">
                                        <div class="card-body" style="font-family: 'Nunito Sans', sans-serif;">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h3 class="vertical-center">{{$month->bulan}}</h3>
                                                </div>
                                                <div class="col-2">
                                                </div>
                                                <div class="col-4">
                                                    <div class="float-end" style="padding-right: 10vh;">
                                                        <a href="/pasien/{{$pasien->id}}/{{$month->id}}" class="btn btn-secondary vertical-center">Details</a>
                                                    </div>
                                                </div>
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
