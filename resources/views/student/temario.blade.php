@extends('layouts.page.app')
@section('content')
    <v-content>
        <v-parallax
            dark
            src="https://static.platzi.com/static/organizations/v2/images/profile/cover.7540b13e6f4c.jpg"
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
                    <v-img :src="'../../images/iconos/web/circle/avanzado.png'" aspect-ratio="1.7" contain></v-img>
                </v-col>
                <v-col md="10">
                    <h1 class="display-1 font-weight-bold mb-4">Algebra</h1>
                    <h4 class="subheading">Docente: Efrain Barrientos</h4>
                </v-col>
            </v-row>
        </v-parallax>
        <v-container>
            <v-row>
                <v-col md="4">
                    <v-card>

                        <v-card

                            flat
                        >
{{--                            <v-img--}}
{{--                                src="https://cdn.vuetifyjs.com/images/cards/forest.jpg"--}}
{{--                                gradient="to top, rgba(0,0,0,.44), rgba(0,0,0,.44)"--}}
{{--                            >--}}
{{--                                <v-container class="fill-height">--}}
{{--                                    <v-row align="center">--}}
{{--                                        <strong class="display-4 font-weight-regular mr-6">8</strong>--}}
{{--                                        <v-row justify="end">--}}
{{--                                            <div class="headline font-weight-light">Monday</div>--}}
{{--                                            <div class="text-uppercase font-weight-light">February 2015</div>--}}
{{--                                        </v-row>--}}
{{--                                    </v-row>--}}
{{--                                </v-container>--}}
{{--                            </v-img>--}}

                            <div class="video-doc position-relative">
                                <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  width="640" height="360" frameborder="0" allow="autoplay; fullscreen"></iframe>
                            </div>
                        </v-card>


                        <v-card-title>
                            Efrain Barrientos
                        </v-card-title>

                        <v-card-subtitle>
                            1,s000 miles of wonder
                        </v-card-subtitle>

                        <v-card-actions>
                            <v-btn
                                color="light-blue"
                                text
                                class="font-weight-bold"
                                href="/clases-vivo/docente"
                            >
                                Sobre el docente
                            </v-btn>

                            <v-spacer></v-spacer>
                        </v-card-actions>

                    </v-card>
                </v-col>
                <v-col md="8">
                    <v-card>
                        <v-list-item>
                            <v-list-item-avatar color="grey">
                                <v-img src="{{asset('images/iconos/cursos/circle/algebra.png')}}" aspect-ratio="1.7" contain></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Temario</v-list-item-title>
{{--                                <v-list-item-subtitle>22 sesiones</v-list-item-subtitle>--}}
                            </v-list-item-content>
                        </v-list-item>

                        <v-divider></v-divider>


                        <v-card-text class="py-0">
                            <v-container
                                id="scroll-target"
                                class="overflow-y-auto py-0"
                            >
                                <v-row
                                    v-scroll:#scroll-target="onScroll"

                                >
                                    <v-timeline
                                        align-top
                                        dense

                                        v-scroll:#scroll-target="onScroll"
                                    >
                                        <v-timeline-item

                                            large
                                        >
                                            <template v-slot:icon>
                                                <v-avatar color="green">
                                                    <v-icon dark>mdi-check</v-icon>
                                                </v-avatar>
                                            </template>

                                            <v-row class="">
                                                <v-col>
                                                    <strong>Ecuaciones</strong>
                                                    <small class="d-block">02 julio 2020</small>
                                                </v-col>

                                            </v-row>
                                        </v-timeline-item>
                                        <v-timeline-item
                                            color="green accent-4"
                                            icon="mdi-check"
                                            small
                                        >

                                            <a href="../curso/algebra/video" class="font-weight-bold light-blue--text pt-1">Exponentes</a>
                                            <small class="d-block">01 junio 2020</small>
                                        </v-timeline-item>
                                        <v-timeline-item
                                            color="green accent-4"
                                            icon="mdi-check"
                                            small
                                        >

                                            <a href="../curso/algebra/video" class="font-weight-bold light-blue--text pt-1">Exponentes</a>
                                            <small class="d-block">01 junio 2020</small>
                                        </v-timeline-item>
                                        <v-timeline-item
                                            color="green accent-4"
                                            icon="mdi-check"
                                            small
                                        >

                                            <a href="../curso/algebra/video" class="font-weight-bold light-blue--text pt-1">Exponentes</a>
                                            <small class="d-block">01 junio 2020</small>
                                        </v-timeline-item>


                                        <v-timeline-item

                                            large
                                        >
                                            <template v-slot:icon>
                                                <v-avatar color="grey accent-4">
                                                    <span class="font-weight-bold white--text">2</span>
                                                </v-avatar>
                                            </template>

                                            <v-row class="">
                                                <v-col>
                                                    <strong>Ecuaciones</strong>
                                                </v-col>

                                            </v-row>
                                        </v-timeline-item>

                                        <v-timeline-item
                                            color="grey darken-4"
                                            icon="mdi-lock"
                                            small
                                        >

                                            <div class="font-weight-bold text--secondary pt-1">Ecuaciones</div>

                                        </v-timeline-item>
                                        <v-timeline-item
                                            color="grey darken-4"
                                            icon="mdi-lock"
                                            small
                                        >

                                            <div class="font-weight-bold text--secondary pt-1">Teoria de exponentes</div>

                                        </v-timeline-item>


                                    </v-timeline>
                                </v-row>

                            </v-container>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>


        </v-container>
    </v-content>
@endsection

