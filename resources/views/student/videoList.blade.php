@extends('layouts.page.app')
@section('content')
    <v-content>
        <video-list-component v-bind:idcurso="{{$idcurso}}"></video-list-component>
    </v-content>
@endsection

