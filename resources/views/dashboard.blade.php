@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Thomas_Edison2-crop.jpg/412px-Thomas_Edison2-crop.jpg"
                          alt="=(" style="height: 150px; width: 120px"></div>
            </div>
            <div class="col-9 pt-5">
                <div>
                    <h1 class="fs-2"><b>{{ $user->username }}</b></h1>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>0</strong> posts</div>
                    <div class="pr-5"><strong>0</strong> followers</div>
                    <div class="pr-5"><strong>0</strong> following</div>
                </div>
                <div class="pt-4 font-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#" class="text-blue-500">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/2006_08_22_142911_Aalborg_Marinemuseum_ubt.jpeg/250px-2006_08_22_142911_Aalborg_Marinemuseum_ubt.jpeg" alt="=<" class="w-100 h-50">
            </div>
            <div class="col-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Photo-CarBattery.jpg/220px-Photo-CarBattery.jpg" alt="=<" class="w-100 h-50">
            </div>
            <div class="col-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Collection_of_United_States_patents_granted_to_Thomas_A._Edison%2C_1869-1884_%281869%29_%2814569979420%29.jpg/220px-Collection_of_United_States_patents_granted_to_Thomas_A._Edison%2C_1869-1884_%281869%29_%2814569979420%29.jpg" alt="=<" class="w-100 h-50">
            </div>
        </div>
    </div>
@endsection
