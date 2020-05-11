@extends('layout')
@section('content')
<div class="col-9">
<h1>Halaman Home</h1>
    <ul class="list-unstyled">
        @foreach ($judul as $item)
        <li class="media">
            <div class="media-body">
                <h5 class="mt-0 mb-1">{{$item}}</h5>
                Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection

<!--
<div class="col-9">
    <ul class="list-unstyled">
        <li class="media">
           <div class="media-body">
            <h5 class="mt-0 mb-1">List based media object</h5>
            Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.
            </div>
        </li>
        <li class="media my-4">
            <div class="media-body">
                <h5 class="mt-0 mb-1">List based media object</h5>
                Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.
            </div>
        </li>
        <li class="media">
           <div class="media-body">
            <h5 class="mt-0 mb-1">List based media object</h5>
            Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.
            </div>
        </li>
    </ul>
</div>
-->
