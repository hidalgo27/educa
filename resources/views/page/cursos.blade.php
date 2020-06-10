@extends('layouts.page.app')
@section('content')
    <v-content>
        <section>
            <v-parallax
                dark
                src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/pizarra.jpg"
                height="250"
            >
                <!--            <v-breadcrumbs :items="items">-->
                <!--                <template v-slot:divider>-->
                <!--                    <v-icon>mdi-chevron-right</v-icon>-->
                <!--                </template>-->
                <!--            </v-breadcrumbs>-->

                <v-row
                    align="center"
                >
                    <v-col md="2">
                        <v-img src="{{$universidad->logo}}" aspect-ratio="1.7" contain></v-img>
                    </v-col>
                    <v-col md="4">
                        <h1 class="display-1 font-weight-bold mb-4">{{$grupos->descripcion}}</h1>
                        <h4 class="subheading">{{$nro_cursos}} cursos</h4>
                    </v-col>

{{--                    <v-col md="3">--}}
{{--                        <v-select--}}
{{--                            v-model="modalidad"--}}
{{--                            :items="modalidades"--}}
{{--                            item-text="modalidad"--}}
{{--                            item-value="id"--}}
{{--                            label="Select"--}}
{{--                            solo--}}
{{--                            class="box-select-group"--}}
{{--                        ></v-select>--}}

{{--                        <v-select--}}
{{--                            v-model="grupo"--}}
{{--                            :items="grupos"--}}
{{--                            item-text="grupo"--}}
{{--                            item-value="id"--}}
{{--                            label="Select"--}}
{{--                            solo--}}
{{--                            class="box-select-group"--}}
{{--                        ></v-select>--}}
{{--                    </v-col>--}}
                </v-row>
            </v-parallax>

            <section class="grey lighten-4">
                <v-container>
                    <v-row>

                        @foreach($cursos as $curso)
                        <v-col cols="12" md="4">
                            <v-hover
                                v-slot:default="{ hover }"
                                open-delay="50"
                            >
                                <v-card
                                    class="mx-auto"
                                    max-width="400"
                                    :elevation="hover ? 8 : 2"
                                >

                                    <v-card-text class="text--primary">
                                        <a href="{{route('clases_path', [$universidad->id,$curso->modalidad_grupo_id,$grupos->id,$curso->id])}}">
                                            <v-row align="center">
                                                <v-col md="auto">

                                                    <v-avatar>
                                                        <img
                                                            src="{{$curso->logo}}"
                                                            alt="John"
                                                        >
                                                    </v-avatar>

                                                </v-col>
                                                <v-col md="auto">
                                                    <span class="text--disabled small font-weight-bold">Curso</span>
                                                    <h3 class="black--text">{{$curso->nombre}}</h3>
                                                    <span class="text--secondary caption font-weight-bold">22 videos</span>
                                                </v-col>
                                            </v-row>
                                        </a>
                                    </v-card-text>
                                </v-card>
                            </v-hover>
                        </v-col>
                        @endforeach
                    </v-row>
                </v-container>
            </section>
        </section>
    </v-content>
@endsection

