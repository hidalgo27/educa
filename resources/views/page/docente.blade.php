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
                    <h1 class="display-1 font-weight-bold mb-4">Efrain Barriento</h1>

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
                            <v-spacer></v-spacer>
                            <v-btn icon color="blue">
                                <v-icon>mdi-facebook</v-icon>
                            </v-btn>
                            <v-btn icon color="light-blue">
                                <v-icon >mdi-twitter</v-icon>
                            </v-btn>
                        </v-card-title>
                    </v-card>
                </v-col>
                <v-col md="8">
                    <v-card class="mb-5">
                        <v-card-title>Sobre el docente</v-card-title>

                        <v-card-text>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolor doloremque eaque eveniet excepturi fugit incidunt mollitia saepe sit temporibus. Atque doloremque dolorum facilis nobis qui reiciendis saepe suscipit vero?</p>
                        </v-card-text>
                    </v-card>

                    <v-card class="mb-5">
                        <v-card-title>Experiencia</v-card-title>

                        <v-card-text>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae non quaerat sapiente? Laborum laudantium molestias similique sit voluptates! Aut harum officiis repudiandae vel! Dicta earum eum laudantium quasi quos ratione.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae non quaerat sapiente? Laborum laudantium molestias similique sit voluptates! Aut harum officiis repudiandae vel! Dicta earum eum laudantium quasi quos ratione.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae non quaerat sapiente? Laborum laudantium molestias similique sit voluptates! Aut harum officiis repudiandae vel! Dicta earum eum laudantium quasi quos ratione.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae non quaerat sapiente? Laborum laudantium molestias similique sit voluptates! Aut harum officiis repudiandae vel! Dicta earum eum laudantium quasi quos ratione.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae non quaerat sapiente? Laborum laudantium molestias similique sit voluptates! Aut harum officiis repudiandae vel! Dicta earum eum laudantium quasi quos ratione.</li>
                            </ul>
                        </v-card-text>
                    </v-card>

                    <v-card class="mb-5">
                        <v-card-title>Logros</v-card-title>

                        <v-card-text>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolor doloremque eaque eveniet excepturi fugit incidunt mollitia saepe sit temporibus. Atque doloremque dolorum facilis nobis qui reiciendis saepe suscipit vero?</p>
                        </v-card-text>
                    </v-card>

                    <v-card class="mb-5">
                        <v-card-title>Estudios</v-card-title>

                        <v-card-text>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolor doloremque eaque eveniet excepturi fugit incidunt mollitia saepe sit temporibus. Atque doloremque dolorum facilis nobis qui reiciendis saepe suscipit vero?</p>
                        </v-card-text>
                    </v-card>

                </v-col>
            </v-row>


        </v-container>
    </v-content>
@endsection

