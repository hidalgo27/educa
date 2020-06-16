@extends('layouts.page.app')
@section('content')
    <v-content>
        <parallax-component></parallax-component>

        <div class="container">


            <div class="row justify-center">
                <div class="col-12 col-md-6 text--secondary font-weight-regular text-center">
                    Prepárate con nuestros cursos en linea, con todo los temas estructurados de su universidad.
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h2>Inicia tu camino ...</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <v-text-field
                        prepend-inner-icon="mdi-magnify"
                        flat
                        hide-details
                        background-color="grey lighten-4"
                        solo
                        color="purple darken-2"
                        placeholder="Buscar entre los más 200 cursos"
                        {{--                                    label="Solo"--}}
                    />
                </div>
            </div>



            <v-row class="my-5">
                @foreach($universidad as $universidades)
                <v-col
                    cols="12"
                    xs="12"
                    sm="6"
                    class="d-flex"
                >
                    <v-hover
                        v-slot:default="{ hover }"
                        open-delay="60"
                    >
                        <v-card
                            :elevation="hover ? 6 : 1"
                            class="w-100"
                        >
                            <v-img src="{{$universidades->imagen}}" aspect-ratio="1.7"
                                   gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                            >
                                <v-card-title>
                                    <v-img
                                        src="{{$universidades->logo}}"
                                        aspect-ratio="1.7"
                                        height="100px"

                                        contain
                                    >
                                    </v-img>
                                </v-card-title>
                            </v-img>

{{--                            <div class="row justify-center">--}}
{{--                                <div class="col-6">--}}
{{--                                    <v-img src="{{asset('images/unsaac.jpg')}}" aspect-ratio="1.7" contain></v-img>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <v-row no-gutters>
                                <v-col>
                                    <v-tabs
                                        v-model="universidad_{{$universidades->id}}"
                                        centered
                                        background-color="{{$universidades->color}}"
                                        dark
                                    >

                                        @foreach($universidades->modalidades->where('estado',1) as $modalidad)
                                        <v-tab href="#ordinario" >
                                            {{$modalidad->titulo}} {{$universidades->abreviatura}}
                                        </v-tab>
                                        @endforeach
{{--                                        <v-tab href="#dirimencia" >--}}
{{--                                            Dirimencia--}}
{{--                                        </v-tab>--}}
{{--                                        <v-tab href="#primera" >--}}
{{--                                            Primera Oportunidad--}}
{{--                                        </v-tab>--}}
                                    </v-tabs>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-tabs-items v-model="universidad_{{$universidades->id}}">
                                        @foreach($universidades->modalidades->where('estado',1) as $modalidad)
                                        <v-tab-item
                                            value="ordinario"
                                        >
                                            <div class="px-4">

                                                    <div class="row">


                                                            @foreach($modalidad->modalidad_grupos as $modalidad_grupos)
{{--                                                                @foreach($modalidad_grupos->grupos as $grupos)--}}

                                                                <div class="col-12 col-md-6">
                                                                    <v-hover v-slot:default="{ hover }">

                                                                        <div class="position-relative grey lighten-4 hover-box-content">

                                                                            <v-expand-x-transition>
                                                                                <div
                                                                                    v-if="hover"
                                                                                    class="d-flex hover-box-content transition-fast-out-linear-in {{$modalidad_grupos->grupo->color}} v-card--reveal display-3 white--text"
                                                                                    style="height: 100%;"
                                                                                >
                                                                                    {{--                                                                                                                                $14.99--}}
                                                                                </div>
                                                                            </v-expand-x-transition>
                                                                            <a href="{{route('cursos_path', [$universidades->id, $modalidad->id, $modalidad_grupos->grupo->id])}}">
                                                                                <div class="position-relative hover-box">
                                                                                    <div class="row no-gutters align-center">
                                                                                        <div class="col-3 {{$modalidad_grupos->grupo->color}} hover-box-content-left pa-4 border-left">
                                                                                            {{--                                                                                                                                        <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                            <v-img src="{{$modalidad_grupos->grupo->logo}}" contain aspect-ratio="1.7"></v-img>
                                                                                        </div>
                                                                                        <div class="col px-6">
                                                                                            <h4 class="font-weight-bold">
                                                                                                {{$modalidad_grupos->grupo->descripcion}}</h4>
{{--                                                                                            <p class="ma-0">22 cursos</p>--}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </v-hover>

                                                                </div>
{{--                                                                @endforeach--}}
                                                            @endforeach


                                                    </div>

                                            </div>
                                        </v-tab-item>
                                        @endforeach

{{--                                        <v-tab-item--}}
{{--                                            value="dirimencia"--}}
{{--                                        >--}}
{{--                                            <v-card flat>--}}
{{--                                                <v-card-text>diri</v-card-text>--}}
{{--                                            </v-card>--}}
{{--                                        </v-tab-item>--}}

{{--                                        <v-tab-item--}}
{{--                                            value="primera"--}}
{{--                                        >--}}
{{--                                            <v-card flat>--}}
{{--                                                <v-card-text>pri</v-card-text>--}}
{{--                                            </v-card>--}}
{{--                                        </v-tab-item>--}}
                                    </v-tabs-items>
                                </v-col>
                            </v-row>

                        </v-card>
                    </v-hover>
                </v-col>
                @endforeach
            </v-row>




        </div>
        <section class="grey pb-5 lighten-4">
            <v-container>
                <v-row>
                    <v-col class="text-center">
                        <h3 class="headline font-weight-bold mt-5 mb-2">Cursos en desarrollo desde el <span class="pink--text">01 junio 2020</span></h3>
                    </v-col>
                </v-row>

                <v-row>
                    @foreach($universidad as $universidades)
                        <v-col md="12" class="mb-8">
                            <v-row>
                                <v-col>
                                    <v-img
                                        src="{{$universidades->logo}}"
                                        aspect-ratio="1.7"
                                        height="100px"

                                        contain
                                    ></v-img>
                                </v-col>
                            </v-row>
                            <h3 class="secondary--text font-weight-medium caption text-center">{{$universidades->nombre}}</h3>

                                @foreach($universidades->modalidades->where('estado',1) as $modalidad)
                                    <h4 class="font-weight-medium mt-4 text-capitalize"><v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon> <strong>Modalidad:</strong> {{$modalidad->titulo}}</h4>
                                <v-row>
                                    @foreach($modalidad->modalidad_grupos as $modalidad_grupos)

                                        <v-col cols="12" md="6">
                                            <v-card>
                                                <v-alert
                                                    dense
                                                    text
                                                    color="{{$modalidad_grupos->grupo->color}}"
                                                    class="w-100"
                                                >
                                                    {{$modalidad_grupos->grupo->descripcion}}
                                                </v-alert>
                                            <v-row>
                                                @foreach($cursos->where('modalidad_grupo_id', $modalidad_grupos->id) as $curso)
                                                    <v-col cols="12" md="6">
                                                    <v-list-item href="{{route('clases_path', [$universidades->id,$curso->modalidad_grupo_id,$modalidad_grupos->grupo->id,$curso->id])}}">
                                                        <v-list-item-avatar>
                                                            <v-img src="{{$curso->logo}}"></v-img>
                                                        </v-list-item-avatar>

                                                        <v-list-item-content>
                                                            <v-list-item-title class="font-weight-medium">{{$curso->nombre}}</v-list-item-title>
                                                        </v-list-item-content>

    {{--                                                    <v-list-item-icon>--}}
    {{--                                                        <v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon>--}}
    {{--                                                    </v-list-item-icon>--}}
                                                    </v-list-item>
                                                    </v-col>
                                                @endforeach
                                            </v-row>
                                            </v-card>
                                        </v-col>
                                    @endforeach
                                </v-row>
                                @endforeach


                        </v-col>

                    @endforeach

{{--                    <v-col>--}}
{{--                        <v-list subheader>--}}
{{--                            @php @endphp--}}
{{--                            @foreach($cursos as $curso)--}}
{{--                                {{$curso->count()}}--}}
{{--                                @if ($curso->id%3 == 0)--}}
{{--                                    <v-list-item href="#">--}}
{{--                                        <v-list-item-avatar>--}}
{{--                                            <v-img src="{{asset('images/iconos/cursos/circle/algebra.png')}}"></v-img>--}}
{{--                                        </v-list-item-avatar>--}}

{{--                                        <v-list-item-content>--}}
{{--                                            <v-list-item-title class="font-weight-medium">{{$curso->nombre}}</v-list-item-title>--}}
{{--                                        </v-list-item-content>--}}

{{--                                        <v-list-item-icon>--}}
{{--                                            <v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon>--}}
{{--                                        </v-list-item-icon>--}}
{{--                                    </v-list-item>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </v-list>--}}
{{--                    </v-col>--}}
                </v-row>

                <v-row>
                    <v-col class="text-center">
                        <h3 class="headline font-weight-bold mt-5 mb-2">Próximos lanzamientos</h3>
                    </v-col>
                </v-row>

                <v-row>
                    <v-col cols="12" md="4">
                        <a href="">
                            <v-alert
                                color="pink"
                                border="left"
                                elevation="2"
                                colored-border
                            >

                                <v-row no-gutters>
                                    <v-col md="3">
                                        <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/iconos/cursos/circle/filosofia.png" aspect-ratio="1.4" contain></v-img>
                                    </v-col>
                                    <v-col>
                                        <h5>Filosofia</h5>
                                        <p class="ma-0 text--secondary">Lanzamiento: 8 de junio de 2020</p>
                                    </v-col>
                                </v-row>
                            </v-alert>
                        </a>
                    </v-col>
                    <v-col cols="12" md="4">
                        <a href="">
                            <v-alert
                                color="green accent-4"
                                border="left"
                                elevation="2"
                                colored-border
                            >

                                <v-row no-gutters>
                                    <v-col md="3">
                                        <v-img :src="'images/iconos/cursos/circle/economia.png'" aspect-ratio="1.4" contain></v-img>
                                    </v-col>
                                    <v-col>
                                        <h5>Economia</h5>
                                        <p class="ma-0 text--secondary">Lanzamiento: 8 de junio de 2020</p>
                                    </v-col>
                                </v-row>
                            </v-alert>
                        </a>
                    </v-col>
                    <v-col cols="12" md="4">
                        <a href="">
                            <v-alert
                                color="purple"
                                border="left"
                                elevation="2"
                                colored-border
                            >

                                <v-row no-gutters>
                                    <v-col md="3">
                                        <v-img :src="'images/iconos/cursos/circle/geografia.png'" aspect-ratio="1.4" contain></v-img>
                                    </v-col>
                                    <v-col>
                                        <h5>Geografia</h5>
                                        <p class="ma-0 text--secondary">Lanzamiento: 8 de junio de 2020</p>
                                    </v-col>
                                </v-row>
                            </v-alert>
                        </a>
                    </v-col>
                </v-row>

            </v-container>
        </section>

        <section>
            <v-container>
                <v-row>
                    <v-col md="6">
                        <h3>Clases en vivo</h3>
                        <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/banner-home.jpg"></v-img>
                    </v-col>
                    <v-col md="6">
                        <h3>Clases en vivo</h3>
                        <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/banner-home.jpg"></v-img>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <section>
            <v-container>
                <v-row>
                    <v-col class="text-center">
                        <h3 class="headline font-weight-bold mt-5 mb-2">Elige un plan y empieza a estudiar</h3>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-simple-table>
                            <template>
                                <thead>
                                <tr>
                                    <th class="text-left title font-weight-bold">Que obtienes</th>
                                    <th class="text-left">
                                        <v-card
                                            flat
                                            tile
                                            max-width="400"
                                        >
                                            <v-card-title class="cyan white--text font-weight-bold"><span class="mx-auto">Green Academy Expert</span></v-card-title>


                                            {{--                                                        <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>--}}

                                            <v-card-text class="text--primary grey lighten-5 text-center pa-4">
                                                <del>s/.250</del>
                                                <div class="display-1 font-weight-bold cyan--text">s/90</div>
                                                <span>soles al mes</span>
                                                <span class="grey--text d-block">En un solo pago de s/.250 por los 3 meses</span>
                                            </v-card-text>
                                        </v-card>
                                    </th>
                                    <th class="text-left">
                                        <v-card
                                            flat
                                            tile
                                            max-width="400"
                                        >
                                            <v-card-title class="grey darken-2 white--text font-weight-bold"><span class="mx-auto">Green Academy Basic</span></v-card-title>


                                            {{--                                                        <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>--}}

                                            <v-card-text class="text--primary grey lighten-5 text-center pa-4">
                                                <div class="display-1 font-weight-bold"><del>s/150</del></div>
                                                <span>soles al mes</span>
{{--                                                <span class="grey--text d-block">En un solo pago de s/999</span>--}}
                                            </v-card-text>
                                        </v-card>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Clases en vivo</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold">mdi-close-thick</v-icon></td>
                                </tr>
                                <tr>
                                    <td>Asesoría de docentes mientras dure el ciclo</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold">mdi-close-thick</v-icon></td>
                                </tr>
                                <tr>
                                    <td>Materiales por cada curso (pdf, diapositivas, etc.)</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold grey lighten-5">mdi-check-bold</v-icon></td>
                                <tr>
                                    <td>Acceso a nuestra plataforma</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold grey lighten-5">mdi-check-bold</v-icon></td>
                                </tr>
                                <tr>
                                    <td>Trivias por video</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold grey lighten-5">mdi-check-bold</v-icon></td>
                                </tr>
                                <tr>
                                    <td>Exámenes por curso</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold grey lighten-5">mdi-check-bold</v-icon></td>
                                </tr>
                                <tr>
                                    <td>Exámenes tipo admisión</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold grey lighten-5">mdi-close-thick</v-icon></td>
                                </tr>
                                <tr>
                                    <td>Seguimiento de progreso</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold grey lighten-5">mdi-check-bold</v-icon></td>
                                </tr>
                                <tr>
                                    <td>Cursos exclusivos de Green Academy</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold grey lighten-5">mdi-close-thick</v-icon></td>
                                </tr>
                                <tr>
                                    <td>Accesos a nuestra comunidad</td>
                                    <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                    <td class="text-center"><v-icon class="font-weight-bold grey lighten-5">mdi-check-bold</v-icon></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td class="text-center pa-5">
                                        <v-btn color="success">Comprar plan</v-btn>
                                    </td>
                                    <td class="text-center pa-5">
                                        <v-btn color="success">Comprar plan</v-btn>
                                    </td>
                                </tr>
                                </tbody>
                            </template>
                        </v-simple-table>
                    </v-col>
                </v-row>
                <v-row justify="center mt-5">
                    <v-col md="8">
                        <v-alert
                            outlined
                            dense
                            color="green"
                            class="text-center"
                        >
                            <div class="font-weight-bold black--text">¿Necesitas clases de reforzamiento privado? Tenemos planes especiales. Conócelos en</div>
                            <v-btn text small color="blue" class="font-weight-bold">
                                greengroup.com/privado
                            </v-btn>
                        </v-alert>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <section>
            <v-container>
                <v-row align="center">
                    <v-col md="6">
                        <v-row align="center">
                            <v-col md="3">
                                <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/banner-home.jpg" class="rounded"></v-img>
                            </v-col>
                            <v-col>
                                <p class="text--primary mb-0">Plataforma responsive:</p>
                                <p class="text--disabled mb-0 text-body-2">Laptop, Celular, Tableta, Desktop, incluso Smart TV.</p>

                            </v-col>
                        </v-row>
                        <v-row align="center">
                            <v-col md="3">
                                <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/banner-home.jpg" class="rounded"></v-img>
                            </v-col>
                            <v-col>
                                <p class="text--primary mb-0">Evaluaciones</p>
                                <p class="text--disabled mb-0 text-body-2">Simulacros de Exámenes de Admisión</p>

                            </v-col>
                        </v-row>
                        <v-row align="center">
                            <v-col md="3">
                                <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/banner-home.jpg" class="rounded"></v-img>
                            </v-col>
                            <v-col>
                                <p class="text--primary mb-0">Clases 100% Dinámicas</p>
                                <p class="text--disabled mb-0 text-body-2">Teoría y Ejercicios de forma entretenida</p>

                            </v-col>
                        </v-row>
                        <v-row align="center">
                            <v-col md="3">
                                <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/banner-home.jpg" class="rounded"></v-img>
                            </v-col>
                            <v-col>
                                <p class="text--primary mb-0">Modulo completo x Curso</p>
                                <p class="text--disabled mb-0 text-body-2">Desarrollo de todo el temario</p>

                            </v-col>
                        </v-row>
                        <v-row align="center">
                            <v-col md="3">
                                <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/banner-home.jpg" class="rounded"></v-img>
                            </v-col>
                            <v-col>
                                <p class="text--primary mb-0">Asesoría Personalizada</p>
                                <p class="text--disabled mb-0 text-body-2">Contacto directo con profesores, incluyendo Asesorías.</p>
                            </v-col>
                        </v-row>
                    </v-col>
                    <v-col md="6">

                        <v-img src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/banner-home.jpg"></v-img>
                    </v-col>
                </v-row>
            </v-container>
        </section>

        <section>
            <v-container>
                <v-row>
                    <v-col class="text-center">
                        <h3 class="headline font-weight-bold mb-2">Cursos exclusivos de Green Academy</h3>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col class="d-flex">
                        <v-alert
                            border="bottom"
                            colored-border
                            color="pink"
                            elevation="2"
                            prominent
                            class="w-100"
                        >
                            <v-row no-gutters align="center">
                                <v-col md="3">
                                    <v-img :src="'images/iconos/cursos/circle/filosofia.png'" aspect-ratio="1.4" contain></v-img>
                                </v-col>
                                <v-col>
                                    <span>Oratoria</span>
                                </v-col>
                            </v-row>
                        </v-alert>
                    </v-col>
                    <v-col class="d-flex">
                        <v-alert
                            border="bottom"
                            colored-border
                            color="cyan"
                            elevation="2"
                            prominent
                            class="w-100"
                        >
                            <v-row no-gutters align="center">
                                <v-col md="3">
                                    <v-img :src="'images/iconos/cursos/circle/rm.png'" aspect-ratio="1.4" contain></v-img>
                                </v-col>
                                <v-col>
                                    <span>Técnicas de memorización</span>
                                </v-col>
                            </v-row>
                        </v-alert>
                    </v-col>
                    <v-col class="d-flex">
                        <v-alert
                            border="bottom"
                            colored-border
                            color="green"
                            elevation="2"
                            prominent
                            class="w-100"
                        >
                            <v-row no-gutters align="center">
                                <v-col md="3">
                                    <v-img :src="'images/iconos/cursos/circle/rv.png'" aspect-ratio="1.4" contain></v-img>
                                </v-col>
                                <v-col>
                                    <span>Mente Brillante</span>
                                </v-col>
                            </v-row>
                        </v-alert>
                    </v-col>
                    <v-col class="d-flex">
                        <v-alert
                            border="bottom"
                            colored-border
                            color="yellow"
                            elevation="2"
                            prominent
                            class="w-100"
                        >
                            <v-row no-gutters align="center">
                                <v-col md="3">
                                    <v-img :src="'images/iconos/cursos/circle/economia.png'" aspect-ratio="1.4" contain></v-img>
                                </v-col>
                                <v-col>
                                    <span>Liderazgo</span>
                                </v-col>
                            </v-row>
                        </v-alert>
                    </v-col>
                </v-row>

            </v-container>
        </section>
        <v-parallax
            dark
            src="https://s3-us-west-1.amazonaws.com/green.com.pe/web/pizarra.jpg"
            height="auto"
        >
            <v-container>
                <v-row
                    justify="center"
                    align="center"
                >
                    <v-col cols="12" md="8">
                        <v-row>
                            <v-col>
                                <h3 class="headline text-center font-weight-bold mb-2">Green Academy Funciona</h3>
                            </v-col>
                        </v-row>
                        <v-row align="center">
                            <v-col>
                                <h3>Logra tus metas:</h3>
                                <p>No sólo videos: Clases concretas, descargables, prácticas y desde cualquier dispositivo.</p>
                            </v-col>
                            <v-col md="4">
                                <v-img src="{{asset('images/iconos/web/simple/metas.png')}}" aspect-ratio="1.7" contain></v-img>
                            </v-col>
                        </v-row>
                        <v-row align="center">
                            <v-col md="4">
                                <v-img src="{{asset('images/iconos/web/simple/examenes.png')}}" aspect-ratio="1.7" contain></v-img>
                            </v-col>
                            <v-col>
                                <h3>Examen de admisión y reforzamiento</h3>
                                <p>Se realizaran simulacros de exámenes de admisión virtual y exámenes de reforzamiento por cada tema que se realice.</p>
                            </v-col>
                        </v-row>
                        <v-row align="center">
                            <v-col>
                                <h3>La mejor comunidad</h3>
                                <p>Crearemos una ruta de aprendizaje personalizada y toda nuestra comunidad te acompañará.</p>
                            </v-col>
                            <v-col md="4">
                                <v-img src="{{asset('images/iconos/web/simple/comunidad.png')}}" aspect-ratio="1.7" contain></v-img>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </v-container>
        </v-parallax>

        <section>
            <v-container>
{{--                <v-row>--}}
{{--                    <v-col class="text-center">--}}
{{--                        <h3 class="headline font-weight-bold mt-5 mb-2">Historias y testimonios</h3>--}}
{{--                    </v-col>--}}
{{--                </v-row>--}}
{{--                <v-row justify="center">--}}
{{--                    <v-col md="9">--}}
{{--                        <v-row>--}}
{{--                            <v-col md="4">--}}
{{--                                <v-row>--}}
{{--                                    <v-col>--}}
{{--                                        <v-card>--}}
{{--                                            <v-card-text>--}}
{{--                                                <div class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid aperiam at cum cumque deserunt, dolores et fugiat illo laborum modi natus necessitatibus.</div>--}}
{{--                                            </v-card-text>--}}
{{--                                        </v-card>--}}
{{--                                    </v-col>--}}
{{--                                </v-row>--}}
{{--                                <v-row align="center">--}}
{{--                                    <v-col md="2">--}}
{{--                                        <v-avatar--}}
{{--                                            size="36px"--}}
{{--                                        >--}}
{{--                                            <img--}}
{{--                                                alt="Avatar"--}}
{{--                                                src="https://avatars0.githubusercontent.com/u/9064066?v=4&s=460"--}}
{{--                                            >--}}
{{--                                            <v-icon--}}
{{--                                                color=""--}}

{{--                                            ></v-icon>--}}
{{--                                        </v-avatar>--}}
{{--                                    </v-col>--}}
{{--                                    <v-col md="10" class="">--}}
{{--                                        <span class="font-weight-bold">Fernando Langschwager</span>--}}
{{--                                        <a href="" class="">@josuechandiasto</a>--}}
{{--                                    </v-col>--}}
{{--                                </v-row>--}}
{{--                            </v-col>--}}
{{--                            <v-col md="4">--}}
{{--                                <v-row>--}}
{{--                                    <v-col>--}}
{{--                                        <v-card>--}}
{{--                                            <v-card-text>--}}
{{--                                                <div class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid aperiam at cum cumque deserunt, dolores et fugiat illo laborum modi natus necessitatibus.</div>--}}
{{--                                            </v-card-text>--}}
{{--                                        </v-card>--}}
{{--                                    </v-col>--}}
{{--                                </v-row>--}}
{{--                                <v-row align="center">--}}
{{--                                    <v-col md="2">--}}
{{--                                        <v-avatar--}}
{{--                                            size="36px"--}}
{{--                                        >--}}
{{--                                            <img--}}
{{--                                                alt="Avatar"--}}
{{--                                                src="https://avatars0.githubusercontent.com/u/9064066?v=4&s=460"--}}
{{--                                            >--}}
{{--                                            <v-icon--}}

{{--                                                color=""--}}

{{--                                            ></v-icon>--}}
{{--                                        </v-avatar>--}}
{{--                                    </v-col>--}}
{{--                                    <v-col md="10" class="">--}}
{{--                                        <span class="font-weight-bold">Fernando Langschwager</span>--}}
{{--                                        <a href="" class="">@josuechandiasto</a>--}}
{{--                                    </v-col>--}}
{{--                                </v-row>--}}
{{--                            </v-col>--}}
{{--                            <v-col md="4">--}}
{{--                                <v-row>--}}
{{--                                    <v-col>--}}
{{--                                        <v-card>--}}
{{--                                            <v-card-text>--}}
{{--                                                <div class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid aperiam at cum cumque deserunt, dolores et fugiat illo laborum modi natus necessitatibus.</div>--}}
{{--                                            </v-card-text>--}}
{{--                                        </v-card>--}}
{{--                                    </v-col>--}}
{{--                                </v-row>--}}
{{--                                <v-row align="center">--}}
{{--                                    <v-col md="2">--}}
{{--                                        <v-avatar--}}
{{--                                            size="36px"--}}
{{--                                        >--}}
{{--                                            <img--}}
{{--                                                alt="Avatar"--}}
{{--                                                src="https://avatars0.githubusercontent.com/u/9064066?v=4&s=460"--}}
{{--                                            >--}}
{{--                                            <v-icon--}}

{{--                                                color=""--}}

{{--                                            ></v-icon>--}}
{{--                                        </v-avatar>--}}
{{--                                    </v-col>--}}
{{--                                    <v-col md="10" class="">--}}
{{--                                        <span class="font-weight-bold">Fernando Langschwager</span>--}}
{{--                                        <a href="" class="">@josuechandiasto</a>--}}
{{--                                    </v-col>--}}
{{--                                </v-row>--}}
{{--                            </v-col>--}}
{{--                        </v-row>--}}
{{--                    </v-col>--}}
{{--                </v-row>--}}
                <div class="row justify-center my-5">
                    <div class="col-8 text--secondary title font-weight-medium text-center">
                        Green Academy es la estrategia de formación de miles de personas para conseguir ingresar a la universidad o reforzar tus conociemintos
                    </div>
                </div>
            </v-container>
        </section>
    </v-content>
@endsection

