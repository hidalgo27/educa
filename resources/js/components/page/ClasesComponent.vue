<template>
    <section>
        <section class="grey lighten-4">
            <v-container>
            <v-row


            >
                <v-col md="1" class="text-center">
                    <v-avatar
                        width="100%"
                        height="74px"
                    >
                        <img
                            :src="'../../images/iconos/cursos/circle/algebra.png'"
                            alt="John"
                        >
                    </v-avatar>
                </v-col>
                <v-col md="11" class="grey--text text--darken-2">
                    <h1 class="display-1 font-weight-medium mb-2">Algebra</h1>
                    <v-row align="end">
                        <v-col md="auto">
                            <v-rating
                                v-model="rating"
                                color="yellow darken-3"
                                background-color="grey darken-1"
                                empty-icon="$ratingFull"
                                readonly
                                dense
                            ></v-rating>
                        </v-col>
                        <v-col>
                            <a href="">Leer más opiniones (2768)</a>
                        </v-col>
                    </v-row>
<!--                    <h4 class="subheading">12 cursos</h4>-->
                    <p class="mt-4 subtitle-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque delectus dolor fugiat suscipit! Adipisci amet atque, consequatur enim illo iusto magni minus nulla, odio pariatur quia quis temporibus, vitae? Commodi!</p>
                </v-col>

            </v-row>
            </v-container>
        </section>

        <section class="">
            <v-container>
                <v-row>
                    <v-col>
                        <h3 class="title mb-4 font-weight-bold grey--text text--darken-2">Con este curso podrás:</h3>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>
                        <v-row align="center">
                            <v-col md="3">
                                <v-img src="https://static.platzi.com/media/achievements/Presencia_online.png" aspect-ratio="1." contain></v-img>
                            </v-col>
                            <v-col>
                                Fortalecer tus conocimientos
                            </v-col>
                        </v-row>
                    </v-col>
                    <v-col>
                        <v-row align="center">
                            <v-col md="3">
                                <v-img src="https://static.platzi.com/media/achievements/Presencia_online.png" aspect-ratio="1." contain></v-img>
                            </v-col>
                            <v-col>
                                Resolver problemas avanzados
                            </v-col>
                        </v-row>
                    </v-col>
                    <v-col>
                        <v-row align="center">
                            <v-col md="3">
                                <v-img src="https://static.platzi.com/media/achievements/Presencia_online.png" aspect-ratio="1." contain></v-img>
                            </v-col>
                            <v-col>
                                Dar examenes personalizados
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>

                <v-row class="mt-4">
                    <v-col>
                        <h3 class="title mb-4 font-weight-bold grey--text text--darken-2">Temario del Curso</h3>
                    </v-col>
                </v-row>

                <v-row>
                    <v-col md="4">
                        <v-timeline
                            align-top
                            dense
                        >
                            <v-timeline-item

                                large
                            >
                                <template v-slot:icon>
                                    <v-avatar>
                                        <img :src="'../../images/iconos/web/circle/basico.png'">
                                    </v-avatar>
                                </template>

                                <v-row class="">
                                    <v-col>
                                        <strong>Clases Base</strong>
                                        <span class="d-block caption"><v-icon color="green accent-4" small>mdi-signal-cellular-1</v-icon> Básico</span>
                                    </v-col>

                                </v-row>
                            </v-timeline-item>
                            <v-timeline-item
                                color="green accent-4"
                                icon="mdi-play"
                                small
                            >

                                <a href="../curso/algebra/video" class="font-weight-bold light-blue--text pt-1">Exponentes</a>

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

                            <v-timeline-item

                                large
                            >
                                <template v-slot:icon>
                                    <v-avatar>
                                        <img :src="'../../images/iconos/web/circle/intermedio.png'">
                                    </v-avatar>
                                </template>

                                <v-row class="">
                                    <v-col>
                                        <strong>Clases Intermedia</strong>
                                        <span class="d-block caption"><v-icon color="cyan accent-4" small>mdi-signal-cellular-2</v-icon> Intermedio</span>
                                    </v-col>

                                </v-row>
                            </v-timeline-item>
                            <v-timeline-item
                                color="grey darken-4"
                                icon="mdi-lock"
                                small
                            >

                                <div class="font-weight-bold text--secondary pt-1">Exponentes</div>

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

                            <v-timeline-item

                                large
                            >
                                <template v-slot:icon>
                                    <v-avatar>
                                        <img :src="'../../images/iconos/web/circle/avanzado.png'">
                                    </v-avatar>
                                </template>

                                <v-row class="">
                                    <v-col>
                                        <strong>Clases Avanzada</strong>
                                        <span class="d-block caption"><v-icon color="amber" small>mdi-signal-cellular-3</v-icon> Avanzado</span>
                                    </v-col>

                                </v-row>
                            </v-timeline-item>
                            <v-timeline-item
                                color="amber"
                                icon="mdi-play"
                                small
                            >

                                <a href="../curso/algebra/video" class="font-weight-bold light-blue--text pt-1">Exponentes</a>

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
                    </v-col>
                    <v-col md="8">
                        <h3 class="title mb-4 font-weight-bold grey--text text--darken-2">Objetivo del Curso</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium error, mollitia? Ab adipisci animi, commodi corporis cumque deserunt distinctio fugit inventore laboriosam magnam necessitatibus neque omnis, perspiciatis sapiente tempora ut!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid, animi consequatur corporis cupiditate dolor esse est expedita id in, laboriosam laudantium, nulla odit quo repellat saepe sapiente sit soluta.</p>
                        <h3 class="subtitle-1 mb-4 font-weight-bold grey--text text--darken-2">Sobre el contenido</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cupiditate dolorem ducimus eaque earum eveniet explicabo incidunt ipsam iste minus nihil nisi odio officiis, optio quia quidem repellat. Nisi, repudiandae?</p>
                        <h3 class="subtitle-1 mb-4 font-weight-bold grey--text text--darken-2">Pruebalo gratis</h3>
                        <p>Con la prueba gratis podras accesder a videos seleccionados gratuitamente.</p>

                        <div class="mt-10 d-block">
                            <v-btn
                                color="green accent-4"
                                class="mr-4"
                                dark
                                large
                                href="../student/algebra/video/list"
                            >
                                <span class="text-capitalize">Ver curso ahora</span>
                            </v-btn>
                        </div>


                    </v-col>
                </v-row>
            </v-container>
        </section>
    </section>
</template>

<script>
    export default {
        data: () => ({
            cursos: [
                { curso: 'Algebra', logo: 'images/iconos/cursos/circle/algebra.png', id: '3' },
            ],

            rating: 4.5,
        }),
    }
</script>

<style>
    /*.v-breadcrumbs__item{*/
    /*    color: white !important;*/
    /*}*/
    .v-breadcrumbs__item--disabled{
        color: white !important;
    }
    .box-select-group{
        height: 48px !important;
    }

    /*.v-timeline-item__divider{*/
    /*    top: 10px;*/
    /*}*/
</style>
