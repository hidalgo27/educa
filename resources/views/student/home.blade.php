@extends('layouts.page.app')
@section('content')
    <v-content>
        <home-component :auth="{{Auth::user()}}"></home-component>
    </v-content>
@endsection

