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
                    <v-img :src="'../images/iconos/web/circle/avanzado.png'" aspect-ratio="1.7" contain></v-img>
                </v-col>
                <v-col md="10">
                    <h1 class="display-1 font-weight-bold mb-4">Temario ciclo virtual</h1>
                    <h4 class="subheading">Team Green Group</h4>
                </v-col>
            </v-row>
        </v-parallax>
        <v-container>

            <v-row>
                <v-col md="4">
                    <v-hover>
                        <template v-slot:default="{ hover }">
                            <v-card
                                class="mx-auto"

                            >
                                <v-img
                                    class="white--text align-end"
                                    src="https://cdn.vuetifyjs.com/images/cards/forest-art.jpg"
                                >
                                    <v-card-title>Efrain Barrientos</v-card-title>
                                </v-img>

                                <v-card-text>
                                    <v-row>
                                        <v-col md="2">
                                            <v-avatar
                                                size="36px"
                                            >
                                                <img
                                                    alt="Avatar"
                                                    src="{{asset('images/iconos/cursos/circle/algebra.png')}}"
                                                >
                                                <v-icon
                                                    color=""

                                                ></v-icon>
                                            </v-avatar>
                                        </v-col>
                                        <v-col md="10" class="">
                                            <span class="title primary--text">Algebra</span>
                                        </v-col>
                                    </v-row>

                                </v-card-text>

                                <v-card-title>
                                    <span class="subtitle-2">110 sesiones</span>
                                </v-card-title>

                                <v-fade-transition>
                                    <v-overlay
                                        v-if="hover"
                                        absolute
                                        color="#036358"
                                    >
                                        <v-btn color="lime accent-4" dark>Sobre el docente</v-btn>
                                        <v-btn>Temario</v-btn>
                                    </v-overlay>
                                </v-fade-transition>
                            </v-card>
                        </template>
                    </v-hover>
                </v-col>
                <v-col md="4">
                    <v-card
                        class="mx-auto"
                    >
                        <v-img
                            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                            height="200px"
                            class="white--text align-end"
                        >
                            <v-card-title>Efrain Barrientos</v-card-title>
                        </v-img>

                        <v-card-title>
                            <v-row>
                                <v-col md="2">
                                    <v-avatar
                                        size="36px"
                                    >
                                        <img
                                            alt="Avatar"
                                            src="{{asset('images/iconos/cursos/circle/algebra.png')}}"
                                        >
                                        <v-icon
                                            color=""

                                        ></v-icon>
                                    </v-avatar>
                                </v-col>
                                <v-col md="10" class="">
                                    <span class="font-weight-bold">Algebra</span>
                                </v-col>
                            </v-row>
                        </v-card-title>

                        <v-card-subtitle>
                            20 sesiones
                        </v-card-subtitle>

                        <v-card-actions>

                            <v-btn
                                text
                            >
                                Sobre el docente
                            </v-btn>

                            <v-btn
                                color="purple"
                                text
                            >
                                Ver temas
                            </v-btn>

                            <v-spacer></v-spacer>


                        </v-card-actions>


                    </v-card>
                </v-col>
                <v-col md="4">
                    <v-card
                        class="mx-auto"
                    >
                        <v-img
                            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                            height="200px"
                            class="white--text align-end"
                        >
                            <v-card-title>Efrain Barrientos</v-card-title>
                        </v-img>

                        <v-card-title>
                            <v-row>
                                <v-col md="2">
                                    <v-avatar
                                        size="36px"
                                    >
                                        <img
                                            alt="Avatar"
                                            src="{{asset('images/iconos/cursos/circle/algebra.png')}}"
                                        >
                                        <v-icon
                                            color=""

                                        ></v-icon>
                                    </v-avatar>
                                </v-col>
                                <v-col md="10" class="">
                                    <span class="font-weight-bold">Algebra</span>
                                </v-col>
                            </v-row>
                        </v-card-title>

                        <v-card-subtitle>
                            20 sesiones
                        </v-card-subtitle>

                        <v-card-actions>

                            <v-btn
                                text
                            >
                                Sobre el docente
                            </v-btn>

                            <v-btn
                                color="purple"
                                text
                            >
                                Ver temas
                            </v-btn>

                            <v-spacer></v-spacer>


                        </v-card-actions>


                    </v-card>
                </v-col>
                <v-col md="4">
                    <v-card
                        class="mx-auto"
                    >
                        <v-img
                            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                            height="200px"
                            class="white--text align-end"
                        >
                            <v-card-title>Efrain Barrientos</v-card-title>
                        </v-img>

                        <v-card-title>
                            <v-row>
                                <v-col md="2">
                                    <v-avatar
                                        size="36px"
                                    >
                                        <img
                                            alt="Avatar"
                                            src="{{asset('images/iconos/cursos/circle/algebra.png')}}"
                                        >
                                        <v-icon
                                            color=""

                                        ></v-icon>
                                    </v-avatar>
                                </v-col>
                                <v-col md="10" class="">
                                    <span class="font-weight-bold">Algebra</span>
                                </v-col>
                            </v-row>
                        </v-card-title>

                        <v-card-subtitle>
                            20 sesiones
                        </v-card-subtitle>

                        <v-card-actions>

                            <v-btn
                                text
                            >
                                Sobre el docente
                            </v-btn>

                            <v-btn
                                color="purple"
                                text
                            >
                                Ver temas
                            </v-btn>

                            <v-spacer></v-spacer>


                        </v-card-actions>


                    </v-card>
                </v-col>
                <v-col md="4">
                    <v-card
                        class="mx-auto"
                    >
                        <v-img
                            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                            height="200px"
                            class="white--text align-end"
                        >
                            <v-card-title>Efrain Barrientos</v-card-title>
                        </v-img>

                        <v-card-title>
                            <v-row>
                                <v-col md="2">
                                    <v-avatar
                                        size="36px"
                                    >
                                        <img
                                            alt="Avatar"
                                            src="{{asset('images/iconos/cursos/circle/algebra.png')}}"
                                        >
                                        <v-icon
                                            color=""

                                        ></v-icon>
                                    </v-avatar>
                                </v-col>
                                <v-col md="10" class="">
                                    <span class="font-weight-bold">Algebra</span>
                                </v-col>
                            </v-row>
                        </v-card-title>

                        <v-card-subtitle>
                            20 sesiones
                        </v-card-subtitle>

                        <v-card-actions>

                            <v-btn
                                text
                            >
                                Sobre el docente
                            </v-btn>

                            <v-btn
                                color="purple"
                                text
                            >
                                Ver temas
                            </v-btn>

                            <v-spacer></v-spacer>


                        </v-card-actions>


                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-content>
@endsection
