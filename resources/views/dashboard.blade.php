@extends('layouts.app')

@section('content')

  	dgfdsfgsdfg
                <router-link to="/" class="nav-link">Dash</router-link>
	<!-- contents from vue js -->
	<router-view></router-view>

@endsection
@push('vueScripts')
  <!-- Vue js -->
  <script type="text/javascript" src="{{asset('js/system.js')}}"></script>
@endpush