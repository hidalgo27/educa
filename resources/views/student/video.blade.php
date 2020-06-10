@extends('layouts.page.app')
@section('content')
    <v-content>
        <student-video-component v-bind:idcurso="{{$idcurso}}" v-bind:idvideo="{{$idvideo}}"></student-video-component>
    </v-content>
@endsection

