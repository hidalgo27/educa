@extends('layouts.page.app')
@section('content')
    <v-content>
        <v-container>
        <v-row>
            <v-col md="4">
                <v-card


                >
                    <v-img
                        src="{{Auth::user()->avatar_original}}"
                        height="300px"
                        dark
                    >
                        <v-row class="fill-height">
                            <v-card-title class="d-block">

                                <v-btn dark icon class="mr-4" href="{{route('profile_student_path')}}">
                                    <v-icon>mdi-pencil</v-icon>
                                </v-btn>


                            </v-card-title>

                            <v-spacer></v-spacer>

                            <v-card-title class="white--text text-center w-100 pt-12 w-100">
                                <div class="display-1 pt-12 mx-auto">Alid Conners</div>
                            </v-card-title>
                        </v-row>
                    </v-img>

                    <v-list two-line>
                        <v-list-item @click="">
                            <v-list-item-icon>
                                <v-icon color="indigo">mdi-phone</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>(650) 555-1234</v-list-item-title>
                                <v-list-item-subtitle>Mobile</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-icon>
                                <v-icon>mdi-message-text</v-icon>
                            </v-list-item-icon>
                        </v-list-item>

                        <v-list-item @click="">
                            <v-list-item-action></v-list-item-action>

                            <v-list-item-content>
                                <v-list-item-title>(323) 555-6789</v-list-item-title>
                                <v-list-item-subtitle>Work</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-icon>
                                <v-icon>mdi-message-text</v-icon>
                            </v-list-item-icon>
                        </v-list-item>

                        <v-divider inset></v-divider>

                        <v-list-item @click="">
                            <v-list-item-icon>
                                <v-icon color="indigo">mdi-email</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>aliconnors@example.com</v-list-item-title>
                                <v-list-item-subtitle>Personal</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>

                        <v-list-item @click="">
                            <v-list-item-action></v-list-item-action>

                            <v-list-item-content>
                                <v-list-item-title>ali_connors@example.com</v-list-item-title>
                                <v-list-item-subtitle>Work</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>

                        <v-divider inset></v-divider>

                        <v-list-item @click="">
                            <v-list-item-icon>
                                <v-icon color="indigo">mdi-map-marker</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>1400 Main Street</v-list-item-title>
                                <v-list-item-subtitle>Orlando, FL 79938</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </v-card>
            </v-col>
            <v-col>
                <h3 class="headline mb-3 font-weight-bold">Tus cursos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eius laudantium nulla quidem quod! Ad commodi consequuntur cumque dolores eaque minus numquam ratione, repudiandae. Assumenda at dolorem expedita impedit modi?</p>

                <v-card tile flat class="mb-3">

                    <v-row no-gutters align="center">
                        <v-col md="2" class="position-relative">
                            <v-img src="{{asset('images/iconos/cursos/circle/algebra.png')}}" aspect-ratio="2" contain></v-img>
                        </v-col>
                        <v-col class="px-3">
                            <h3 class="small font-weight-bold mb-2">Algebra</h3>
                            <v-progress-linear
                                value="90"
                                height="20"
                                color="green accent-4"
                                dark
                            >
                                <span class="caption">90%</span>
                            </v-progress-linear>
                            <p class="mt-2 font-weight-medium text--secondary caption">15/16Materiales</p>
                        </v-col>
                        <v-col md="4">
                            <v-btn class="w-100 text-capitalize" color="green accent-4" dark>Continuar viendo curso</v-btn>
                        </v-col>
                    </v-row>

                </v-card>


                <v-card tile flat class="mb-3">

                    <v-row no-gutters align="center">
                        <v-col md="2" class="position-relative">
                            <v-img src="{{asset('images/iconos/cursos/circle/fisica.png')}}" aspect-ratio="2" contain></v-img>
                        </v-col>
                        <v-col class="px-3">
                            <h3 class="small font-weight-bold mb-2">Fisica</h3>
                            <v-progress-linear
                                value="50"
                                height="20"
                                color="amber"
                                dark
                            >
                                <span class="caption">50%</span>
                            </v-progress-linear>
                            <p class="mt-2 font-weight-medium text--secondary caption">15/16Materiales</p>
                        </v-col>
                        <v-col md="4">
                            <v-btn class="w-100 text-capitalize" color="green accent-4" dark>Continuar viendo curso</v-btn>
                        </v-col>
                    </v-row>

                </v-card>

                <v-card tile flat class="mb-3">

                    <v-row no-gutters align="center">
                        <v-col md="2" class="position-relative">
                            <v-img src="{{asset('images/iconos/cursos/circle/geometria.png')}}" aspect-ratio="2" contain></v-img>
                        </v-col>
                        <v-col class="px-3">
                              <h3 class="small font-weight-bold mb-2">Geometria</h3>
                            <v-progress-linear
                                value="15"
                                height="20"
                                color="red"
                                dark
                            >
                                <span class="caption">15%</span>
                            </v-progress-linear>
                            <p class="mt-2 font-weight-medium text--secondary caption">15/16Materiales</p>
                        </v-col>
                        <v-col md="4">
                            <v-btn class="w-100 text-capitalize" color="green accent-4" dark>Continuar viendo curso</v-btn>
                        </v-col>
                    </v-row>

                </v-card>


            </v-col>
        </v-row>

        </v-container>
    </v-content>
@endsection

