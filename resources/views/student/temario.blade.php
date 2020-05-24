@extends('layouts.page.app')
@section('content')
    <v-content>
        <v-container>
            <v-row
                align="center"
            >
                <v-col md="2">
                    <v-img src="{{asset('images/iconos/cursos/circle/algebra.png')}}" aspect-ratio="1.7" contain></v-img>
                </v-col>
                <v-col md="10">
                    <h1 class="display-1 font-weight-bold mb-4">Algebra</h1>
                    <h4 class="subheading">Lista de temas</h4>
                </v-col>
            </v-row>

            <v-row>
                <v-col>
                    <ul>
                        <li>
                            Teoria de exponentes
                        </li>
                    </ul>
                </v-col>
            </v-row>
        </v-container>
    </v-content>
@endsection

