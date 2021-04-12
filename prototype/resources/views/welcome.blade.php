@extends('layouts.base')
@section('title', '- welcome page')
@section('content')
  <div class="flex items-center justify-center">
    <section class="mx-auto">
        <h1 class="mt-2">Why the CCCU?</h1>
        <div>
            At the Curepipe Co-operative Credit Union, our mission is not only to encourage savings and access credit. Our team is at the service of its members. Shareholders that we accompany step by step on a daily basis to help them achieve their goals. Each client counts and we form a large family where the key word is mutual aid. Like a human chain, we advance together and the exchange takes place in both directions. It is thanks to the support of the members that the management can dream of the best for the latter. More concretely our products and services are as follows :
        </div>
    </section>
  </div>

    {{-- <sample-component :items="{{ json_encode($data) }}"></sample-component> --}}
    {{-- <menu-component></menu-component> --}}
@endsection
