<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <v-app>

                <nav-component></nav-component>
                <v-content>
                    <parallax-component></parallax-component>

                    <div class="container">


                        <div class="row justify-center">
                            <div class="col-6 text--secondary title text-center">
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



                                    <v-row>
                                        <v-col
                                            cols="12"
                                            sm="6"
                                        >
                                            <v-hover
                                                v-slot:default="{ hover }"
                                                open-delay="60"
                                            >
                                                <v-card
                                                    :elevation="hover ? 6 : 1"
                                                    class="px-3"
                                                >
                                                    <div class="row justify-center">
                                                        <div class="col-6">
                                                            <v-img src="{{asset('images/logos/logo-unsaac.png')}}" aspect-ratio="1.7" contain></v-img>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <v-hover v-slot:default="{ hover }">
                                                                <div class="position-relative grey lighten-4 hover-box-content">
                                                                    <v-expand-x-transition>
                                                                        <div
                                                                            v-if="hover"
                                                                            class="d-flex hover-box-content transition-fast-out-linear-in orange darken-2 v-card--reveal display-3 white--text"
                                                                            style="height: 100%;"
                                                                        >
                                                                            {{--                                                    $14.99--}}
                                                                        </div>
                                                                    </v-expand-x-transition>
                                                                    <div class="position-relative hover-box">

                                                                        <div class="row no-gutters align-center">
                                                                            <div class="col-3 orange hover-box-content-left darken-2 pa-3 border-left">
                                                                                {{--                                                    <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                <v-img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" contain aspect-ratio="1.2"></v-img>
                                                                            </div>
                                                                            <div class="col px-6">
                                                                                <h4 class="font-weight-bold">Grupo A</h4>
                                                                                <p class="ma-0">22 cursos</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </v-hover>
                                                        </div>

                                                        <div class="col-6">
                                                            <v-hover v-slot:default="{ hover }">
                                                                <div class="position-relative grey lighten-4 hover-box-content">
                                                                    <v-expand-x-transition>
                                                                        <div
                                                                            v-if="hover"
                                                                            class="d-flex hover-box-content transition-fast-out-linear-in light-blue accent-2 v-card--reveal display-3 white--text"
                                                                            style="height: 100%;"
                                                                        >
                                                                            {{--                                                    $14.99--}}
                                                                        </div>
                                                                    </v-expand-x-transition>
                                                                    <div class="position-relative hover-box">

                                                                        <div class="row no-gutters align-center">
                                                                            <div class="col-3 light-blue accent-2 hover-box-content-left pa-3 border-left">
                                                                                {{--                                                    <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                <v-img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" contain aspect-ratio="1.2"></v-img>
                                                                            </div>
                                                                            <div class="col px-6">
                                                                                <h4 class="font-weight-bold">Grupo B</h4>
                                                                                <p class="ma-0">12 cursos</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </v-hover>
                                                        </div>

                                                        <div class="col-6">
                                                            <v-hover v-slot:default="{ hover }">
                                                                <div class="position-relative grey lighten-4 hover-box-content">
                                                                    <v-expand-x-transition>
                                                                        <div
                                                                            v-if="hover"
                                                                            class="d-flex hover-box-content transition-fast-out-linear-in pink v-card--reveal display-3 white--text"
                                                                            style="height: 100%;"
                                                                        >
                                                                            {{--                                                    $14.99--}}
                                                                        </div>
                                                                    </v-expand-x-transition>
                                                                    <div class="position-relative hover-box">

                                                                        <div class="row no-gutters align-center">
                                                                            <div class="col-3 pink hover-box-content-left pa-3 border-left">
                                                                                {{--                                                    <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                <v-img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" contain aspect-ratio="1.2"></v-img>
                                                                            </div>
                                                                            <div class="col px-6">
                                                                                <h4 class="font-weight-bold">Grupo C</h4>
                                                                                <p class="ma-0">10 cursos</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </v-hover>
                                                        </div>

                                                        <div class="col-6">
                                                            <v-hover v-slot:default="{ hover }">
                                                                <div class="position-relative grey lighten-4 hover-box-content">
                                                                    <v-expand-x-transition>
                                                                        <div
                                                                            v-if="hover"
                                                                            class="d-flex hover-box-content transition-fast-out-linear-in purple v-card--reveal display-3 white--text"
                                                                            style="height: 100%;"
                                                                        >
                                                                            {{--                                                    $14.99--}}
                                                                        </div>
                                                                    </v-expand-x-transition>
                                                                    <div class="position-relative hover-box">

                                                                        <div class="row no-gutters align-center">
                                                                            <div class="col-3 purple hover-box-content-left pa-3 border-left">
                                                                                {{--                                                    <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                <v-img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" contain aspect-ratio="1.2"></v-img>
                                                                            </div>
                                                                            <div class="col px-6">
                                                                                <h4 class="font-weight-bold">Grupo D</h4>
                                                                                <p class="ma-0">15 cursos</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </v-hover>
                                                        </div>
                                                    </div>
                                                </v-card>
                                            </v-hover>
                                        </v-col>

                                        <v-col
                                            cols="12"
                                            sm="6"
                                        >
                                            <v-hover
                                                v-slot:default="{ hover }"
                                                close-delay="60"
                                            >
                                                <v-card
                                                    :elevation="hover ? 6 : 1"
                                                    class="px-3"

                                                >
                                                    <div class="row justify-center">
                                                        <div class="col-6">
                                                            <v-img src="{{asset('images/logos/logo-andina.png')}}" aspect-ratio="1.7" contain></v-img>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <v-hover v-slot:default="{ hover }">
                                                                <div class="position-relative grey lighten-4 hover-box-content">
                                                                    <v-expand-x-transition>
                                                                        <div
                                                                            v-if="hover"
                                                                            class="d-flex hover-box-content transition-fast-out-linear-in orange darken-2 v-card--reveal display-3 white--text"
                                                                            style="height: 100%;"
                                                                        >
                                                                            {{--                                                    $14.99--}}
                                                                        </div>
                                                                    </v-expand-x-transition>
                                                                    <div class="position-relative hover-box">

                                                                        <div class="row no-gutters align-center">
                                                                            <div class="col-3 orange hover-box-content-left darken-2 pa-3 border-left">
                                                                                {{--                                                    <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                <v-img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" contain aspect-ratio="1.2"></v-img>
                                                                            </div>
                                                                            <div class="col px-6">
                                                                                <h4 class="font-weight-bold">Grupo A</h4>
                                                                                <p class="ma-0">22 cursos</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </v-hover>
                                                        </div>

                                                        <div class="col-6">
                                                            <v-hover v-slot:default="{ hover }">
                                                                <div class="position-relative grey lighten-4 hover-box-content">
                                                                    <v-expand-x-transition>
                                                                        <div
                                                                            v-if="hover"
                                                                            class="d-flex hover-box-content transition-fast-out-linear-in light-blue accent-2 v-card--reveal display-3 white--text"
                                                                            style="height: 100%;"
                                                                        >
                                                                            {{--                                                    $14.99--}}
                                                                        </div>
                                                                    </v-expand-x-transition>
                                                                    <div class="position-relative hover-box">

                                                                        <div class="row no-gutters align-center">
                                                                            <div class="col-3 light-blue accent-2 hover-box-content-left pa-3 border-left">
                                                                                {{--                                                    <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                <v-img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" contain aspect-ratio="1.2"></v-img>
                                                                            </div>
                                                                            <div class="col px-6">
                                                                                <h4 class="font-weight-bold">Grupo B</h4>
                                                                                <p class="ma-0">12 cursos</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </v-hover>
                                                        </div>

                                                        <div class="col-6">
                                                            <v-hover v-slot:default="{ hover }">
                                                                <div class="position-relative grey lighten-4 hover-box-content">
                                                                    <v-expand-x-transition>
                                                                        <div
                                                                            v-if="hover"
                                                                            class="d-flex hover-box-content transition-fast-out-linear-in pink v-card--reveal display-3 white--text"
                                                                            style="height: 100%;"
                                                                        >
                                                                            {{--                                                    $14.99--}}
                                                                        </div>
                                                                    </v-expand-x-transition>
                                                                    <div class="position-relative hover-box">

                                                                        <div class="row no-gutters align-center">
                                                                            <div class="col-3 pink hover-box-content-left pa-3 border-left">
                                                                                {{--                                                    <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                <v-img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" contain aspect-ratio="1.2"></v-img>
                                                                            </div>
                                                                            <div class="col px-6">
                                                                                <h4 class="font-weight-bold">Grupo C</h4>
                                                                                <p class="ma-0">10 cursos</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </v-hover>
                                                        </div>

                                                        <div class="col-6">
                                                            <v-hover v-slot:default="{ hover }">
                                                                <div class="position-relative grey lighten-4 hover-box-content">
                                                                    <v-expand-x-transition>
                                                                        <div
                                                                            v-if="hover"
                                                                            class="d-flex hover-box-content transition-fast-out-linear-in purple v-card--reveal display-3 white--text"
                                                                            style="height: 100%;"
                                                                        >
                                                                            {{--                                                    $14.99--}}
                                                                        </div>
                                                                    </v-expand-x-transition>
                                                                    <div class="position-relative hover-box">

                                                                        <div class="row no-gutters align-center">
                                                                            <div class="col-3 purple hover-box-content-left pa-3 border-left">
                                                                                {{--                                                    <img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" alt="" class="pa-3">--}}
                                                                                <v-img src="https://static.platzi.com/mf-landings/image/ico-marketing-e06e714b6435502c9c1d2ddc573ba258.png" contain aspect-ratio="1.2"></v-img>
                                                                            </div>
                                                                            <div class="col px-6">
                                                                                <h4 class="font-weight-bold">Grupo D</h4>
                                                                                <p class="ma-0">15 cursos</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </v-hover>
                                                        </div>
                                                    </div>
                                                </v-card>
                                            </v-hover>
                                        </v-col>
                                    </v-row>




                    </div>
                    <section class="grey lighten-4">
                        <v-container>
                            <v-row>
                                <v-col class="text-center">
                                    <h3 class="headline font-weight-bold">Nuevos cursos lanzados</h3>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col>
                                    <v-list subheader>
{{--                                        <v-subheader>Recent chat</v-subheader>--}}

                                        <v-list-item>
                                            <v-list-item-avatar>
                                                <v-img src="{{asset('images/logos/logo-unsaac.png')}}"></v-img>
                                            </v-list-item-avatar>

                                            <v-list-item-content>
                                                <v-list-item-title>Algebra</v-list-item-title>
                                            </v-list-item-content>

                                            <v-list-item-icon>
                                                <v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon>
                                            </v-list-item-icon>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-avatar>
                                                <v-img src="{{asset('images/logos/logo-unsaac.png')}}"></v-img>
                                            </v-list-item-avatar>

                                            <v-list-item-content>
                                                <v-list-item-title>Razonamiento matemático</v-list-item-title>
                                            </v-list-item-content>

                                            <v-list-item-icon>
                                                <v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon>
                                            </v-list-item-icon>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-avatar>
                                                <v-img src="{{asset('images/logos/logo-unsaac.png')}}"></v-img>
                                            </v-list-item-avatar>

                                            <v-list-item-content>
                                                <v-list-item-title>Razonamiento Verbal</v-list-item-title>
                                            </v-list-item-content>

                                            <v-list-item-icon>
                                                <v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon>
                                            </v-list-item-icon>
                                        </v-list-item>

                                    </v-list>
                                </v-col>
                                <v-col>
                                    <v-list subheader>
                                        {{--                                        <v-subheader>Recent chat</v-subheader>--}}

                                        <v-list-item>
                                            <v-list-item-avatar>
                                                <v-img src="{{asset('images/logos/logo-andina.png')}}"></v-img>
                                            </v-list-item-avatar>

                                            <v-list-item-content>
                                                <v-list-item-title>Historia</v-list-item-title>
                                            </v-list-item-content>

                                            <v-list-item-icon>
                                                <v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon>
                                            </v-list-item-icon>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-avatar>
                                                <v-img src="{{asset('images/logos/logo-andina.png')}}"></v-img>
                                            </v-list-item-avatar>

                                            <v-list-item-content>
                                                <v-list-item-title>Biología</v-list-item-title>
                                            </v-list-item-content>

                                            <v-list-item-icon>
                                                <v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon>
                                            </v-list-item-icon>
                                        </v-list-item>

                                        <v-list-item>
                                            <v-list-item-avatar>
                                                <v-img src="{{asset('images/logos/logo-andina.png')}}"></v-img>
                                            </v-list-item-avatar>

                                            <v-list-item-content>
                                                <v-list-item-title>Química</v-list-item-title>
                                            </v-list-item-content>

                                            <v-list-item-icon>
                                                <v-icon color="deep-purple accent-4">mdi-chevron-right</v-icon>
                                            </v-list-item-icon>
                                        </v-list-item>

                                    </v-list>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col class="text-center">
                                    <h3 class="headline font-weight-bold">Próximos lanzamientos</h3>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col>
                                    <v-alert
                                        v-model="alert"

                                        color="cyan"
                                        border="left"
                                        elevation="2"
                                        colored-border
                                        icon="mdi-twitter"
                                    >
                                        <h5>Física</h5>
                                        <p class="ma-0">Lanzamiento: 25 de junio de 2020</p>
                                    </v-alert>
                                </v-col>
                                <v-col>
                                    <v-alert
                                        v-model="alert"

                                        color="pink"
                                        border="left"
                                        elevation="2"
                                        colored-border
                                        icon="mdi-twitter"
                                    >
                                        <h5>Geometría</h5>
                                        <p class="ma-0 text--secondary">Lanzamiento: 25 de junio de 2020</p>
                                    </v-alert>
                                </v-col>
                                <v-col>
                                    <v-alert
                                        v-model="alert"

                                        color="purple"
                                        border="left"
                                        elevation="2"
                                        colored-border
                                        icon="mdi-twitter"
                                    >
                                        <h5>Geografía</h5>
                                        <p class="ma-0">Lanzamiento: 25 de junio de 2020</p>
                                    </v-alert>
                                </v-col>
                            </v-row>

                        </v-container>
                </section>

                    <section>
                        <v-container>
                            <v-row>
                                <v-col class="text-center">
                                    <h3 class="headline font-weight-bold">Elige un plan y empieza a estudiar</h3>
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
                                                            <v-card-title class="cyan white--text font-weight-bold"><span class="mx-auto">Edulab Expert</span></v-card-title>


{{--                                                        <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>--}}

                                                        <v-card-text class="text--primary grey lighten-5 text-center pa-4">
                                                            <div class="display-1 font-weight-bold cyan--text">s/84</div>
                                                            <span>soles al mes</span>
                                                            <span class="grey--text d-block">En un solo pago de s/999</span>
                                                        </v-card-text>
                                                    </v-card>
                                                </th>
                                                <th class="text-left">
                                                    <v-card
                                                        flat
                                                        tile
                                                        max-width="400"
                                                    >
                                                        <v-card-title class="grey darken-2 white--text font-weight-bold"><span class="mx-auto">Edulab Basic</span></v-card-title>


                                                        {{--                                                        <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>--}}

                                                        <v-card-text class="text--primary grey lighten-5 text-center pa-4">
                                                            <div class="display-1 font-weight-bold">s/84</div>
                                                            <span>soles al mes</span>
                                                            <span class="grey--text d-block">En un solo pago de s/999</span>
                                                        </v-card-text>
                                                    </v-card>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Accedes a más de 150 cursos y 24 carreras</td>
                                                <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                                <td class="text-center"><v-icon class="font-weight-bold">mdi-check-bold</v-icon></td>
                                            </tr>
                                            <tr>
                                                <td>Accedes a más de 150 cursos y 24 carreras</td>
                                                <td class="text-center"><v-icon class="font-weight-bold cyan--text">mdi-check-bold</v-icon></td>
                                                <td class="text-center"><v-icon class="font-weight-bold red--text">mdi-close-thick</v-icon></td>
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
                            <v-row justify="center">
                                <v-col md="8">
                                    <v-alert
                                        outlined
                                        dense
                                        color="green"
                                        class="text-center"
                                    >
                                        <div class="font-weight-bold black--text">¿Necesitas clases de reforzamiento privado? Tenemos planes especiales. Conócelos en</div>
                                        <v-btn text small color="blue" class="font-weight-bold">
                                            edulab.com/privado
                                        </v-btn>
                                    </v-alert>
                                </v-col>
                            </v-row>
                        </v-container>
                    </section>

                    <section>
                        <v-container>
                            <v-row>
                                <v-col class="text-center">
                                    <h3 class="headline font-weight-bold">Cursos exclusivos de Edulab</h3>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-alert
                                        border="bottom"
                                        icon="mdi-vuetify"
                                        colored-border
                                        color="pink"
                                        elevation="2"
                                        prominent

                                    >
                                        Oratoria
                                    </v-alert>
                                </v-col>
                                <v-col>
                                    <v-alert
                                        border="bottom"
                                        icon="mdi-vuetify"
                                        colored-border
                                        color="cyan"
                                        elevation="2"
                                        prominent

                                    >
                                        Técnicas de memorización
                                    </v-alert>
                                </v-col>
                                <v-col>
                                    <v-alert
                                        border="bottom"
                                        icon="mdi-vuetify"
                                        colored-border
                                        color="green"
                                        elevation="2"
                                        prominent

                                    >
                                        Mente Brillante
                                    </v-alert>
                                </v-col>
                                <v-col>
                                    <v-alert
                                        border="bottom"
                                        icon="mdi-vuetify"
                                        colored-border
                                        color="yellow"
                                        elevation="2"
                                        prominent

                                    >
                                        Liderazgo
                                    </v-alert>
                                </v-col>
                            </v-row>

                        </v-container>
                    </section>
                    <v-parallax
                        dark
                        src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"
                        height="600"
                    >
                        <v-container>
                        <v-row

                            justify="center"
                        >
                            <v-col cols="8">
                                <v-row>
                                    <v-col>
                                        <h3 class="headline text-center font-weight-bold">Edulab Funciona</h3>
                                    </v-col>
                                </v-row>
                                <v-row align="center">
                                    <v-col>
                                        <h3>Logra tus metas:</h3>
                                        <p>No sólo videos: Clases concretas, descargables, prácticas y desde cualquier dispositivo.</p>
                                    </v-col>
                                    <v-col md="4">
                                        <v-img src="https://static.platzi.com/static/images/home-v4/platform_goals.png" aspect-ratio="1.7" contain></v-img>
                                    </v-col>
                                </v-row>
                                <v-row align="center">
                                    <v-col md="4">
                                        <v-img src="https://static.platzi.com/static/images/home-v4/platform_certificate.png" aspect-ratio="1.7" contain></v-img>
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
                                        <v-img src="https://static.platzi.com/static/images/home-v4/platform_community.png" aspect-ratio="1.7" contain></v-img>
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-row>
                        </v-container>
                    </v-parallax>

                    <section>
                        <v-container>
                            <v-row>
                                <v-col class="text-center">
                                    <h3 class="headline font-weight-bold">Historias y testimonios</h3>
                                </v-col>
                            </v-row>
                            <v-row justify="center">
                                <v-col md="9">
                                    <v-row>
                                        <v-col md="4">
                                            <v-row>
                                                <v-col>
                                                    <v-card>
                                                        <v-card-text>
                                                            <div class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid aperiam at cum cumque deserunt, dolores et fugiat illo laborum modi natus necessitatibus.</div>
                                                        </v-card-text>
                                                    </v-card>
                                                </v-col>
                                            </v-row>
                                            <v-row align="center">
                                                <v-col md="2">
                                                    <v-avatar
                                                        size="36px"
                                                    >
                                                        <img
                                                            alt="Avatar"
                                                            src="https://avatars0.githubusercontent.com/u/9064066?v=4&s=460"
                                                        >
                                                        <v-icon
                                                            v-else
                                                            color=""
                                                            v-text="hola"
                                                        ></v-icon>
                                                    </v-avatar>
                                                </v-col>
                                                <v-col md="10" class="">
                                                    <span class="font-weight-bold">Fernando Langschwager</span>
                                                    <a href="" class="">@josuechandiasto</a>
                                                </v-col>
                                            </v-row>
                                        </v-col>
                                        <v-col md="4">
                                            <v-row>
                                                <v-col>
                                                    <v-card>
                                                        <v-card-text>
                                                            <div class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid aperiam at cum cumque deserunt, dolores et fugiat illo laborum modi natus necessitatibus.</div>
                                                        </v-card-text>
                                                    </v-card>
                                                </v-col>
                                            </v-row>
                                            <v-row align="center">
                                                <v-col md="2">
                                                    <v-avatar
                                                        size="36px"
                                                    >
                                                        <img
                                                            alt="Avatar"
                                                            src="https://avatars0.githubusercontent.com/u/9064066?v=4&s=460"
                                                        >
                                                        <v-icon
                                                            v-else
                                                            color=""
                                                            v-text="hola"
                                                        ></v-icon>
                                                    </v-avatar>
                                                </v-col>
                                                <v-col md="10" class="">
                                                    <span class="font-weight-bold">Fernando Langschwager</span>
                                                    <a href="" class="">@josuechandiasto</a>
                                                </v-col>
                                            </v-row>
                                        </v-col>
                                        <v-col md="4">
                                            <v-row>
                                                <v-col>
                                                    <v-card>
                                                        <v-card-text>
                                                            <div class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid aperiam at cum cumque deserunt, dolores et fugiat illo laborum modi natus necessitatibus.</div>
                                                        </v-card-text>
                                                    </v-card>
                                                </v-col>
                                            </v-row>
                                            <v-row align="center">
                                                <v-col md="2">
                                                    <v-avatar
                                                        size="36px"
                                                    >
                                                        <img
                                                            alt="Avatar"
                                                            src="https://avatars0.githubusercontent.com/u/9064066?v=4&s=460"
                                                        >
                                                        <v-icon
                                                            v-else
                                                            color=""
                                                            v-text="hola"
                                                        ></v-icon>
                                                    </v-avatar>
                                                </v-col>
                                                <v-col md="10" class="">
                                                    <span class="font-weight-bold">Fernando Langschwager</span>
                                                    <a href="" class="">@josuechandiasto</a>
                                                </v-col>
                                            </v-row>
                                        </v-col>
                                    </v-row>
                                </v-col>
                            </v-row>
                            <div class="row justify-center my-5">
                                <div class="col-8 text--secondary title font-weight-medium text-center">
                                    Edulab es la estrategia de formación de miles de personas para conseguir ingresar a la universidad o reforzar tus conociemintos
                                </div>
                            </div>
                        </v-container>
                    </section>
                </v-content>

                <v-footer
                    class="justify-center"
                    color="#292929"
                    height="100"
                >
                    <div class="title font-weight-light grey--text text--lighten-1 text-center">
                        &copy; 2020 — Edulab, LLC — Made with 💜 by Lobo
                    </div>
                </v-footer>

            </v-app>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
