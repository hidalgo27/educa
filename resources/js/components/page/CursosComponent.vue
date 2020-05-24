<template>
    <section>
        <v-parallax
            dark
            :src="'images/bottom_bg4.jpg'"
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
                    <v-img :src="'images/logos/logo-unsaac.png'" aspect-ratio="1.7" contain></v-img>
                </v-col>
                <v-col md="4">
                    <h1 class="display-1 font-weight-bold mb-4">Grupo A</h1>
                    <h4 class="subheading">12 cursos</h4>
                </v-col>
                <v-col md="3">
                    <v-select
                        v-model="modalidad"
                        :items="modalidades"
                        item-text="modalidad"
                        item-value="id"
                        label="Select"
                        solo
                        class="box-select-group"
                    ></v-select>
                </v-col>
                <v-col md="3">
                    <v-select
                        v-model="grupo"
                        :items="grupos"
                        item-text="grupo"
                        item-value="id"
                        label="Select"
                        solo
                        class="box-select-group"
                    ></v-select>
                </v-col>
            </v-row>
        </v-parallax>

        <section class="grey lighten-4">
            <v-container>
                <v-row>


                    <v-col md="4" v-for="cursolist in cursos" :key="cursolist">
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
                                    <a :href="'curso/algebra'">
                                        <v-row align="center">
                                            <v-col md="auto">

                                                <v-avatar>
                                                    <img
                                                        :src="cursolist.logo"
                                                        alt="John"
                                                    >
                                                </v-avatar>

                                            </v-col>
                                            <v-col md="auto">
                                                <span class="text--disabled small font-weight-bold">Curso</span>
                                                <h3 class="black--text">{{ cursolist.curso }}</h3>
                                                <span class="text--secondary caption font-weight-bold">22 videos</span>
                                            </v-col>
                                        </v-row>
                                    </a>
                                </v-card-text>
                            </v-card>
                        </v-hover>
                    </v-col>


                </v-row>
            </v-container>
        </section>
    </section>
</template>

<script>
    export default {
        data: () => ({
            items: [
                {
                    text: 'Dashboard',
                    disabled: false,
                    href: 'breadcrumbs_dashboard',
                },
                {
                    text: 'Link 1',
                    disabled: false,
                    href: 'breadcrumbs_link_1',
                },
                {
                    text: 'Link 2',
                    disabled: true,
                    href: 'breadcrumbs_link_2',
                },
            ],
            grupo: { grupo: 'Grupo A', id: '1' },
            grupos: [
                { grupo: 'Grupo A', id: '1' },
                { grupo: 'Grupo B', id: '2' },
                { grupo: 'Grupo C', id: '3' },
                { grupo: 'Grupo D', id: '4' },
            ],
            modalidad: { modalidad: 'Ordinario', id: '1' },
            modalidades: [
                { modalidad: 'Ordinario', id: '1' },
                { modalidad: 'Dirimencia', id: '2' },
                { modalidad: 'Primera Opción', id: '3' },
            ],

            cursos: [

                { curso: 'Algebra', logo: 'images/iconos/cursos/circle/algebra.png', id: '3' },
                { curso: 'Biologia', logo: 'images/iconos/cursos/circle/biologia.png', id: '3' },
                { curso: 'Comunicación', logo: 'images/iconos/cursos/circle/comunicacion.png', id: '3' },
                { curso: 'Economia', logo: 'images/iconos/cursos/circle/economia.png', id: '3' },
                { curso: 'Filosofia', logo: 'images/iconos/cursos/circle/filosofia.png', id: '3' },
                { curso: 'Fisica', logo: 'images/iconos/cursos/circle/fisica.png', id: '1' },
                { curso: 'Geografia', logo: 'images/iconos/cursos/circle/geografia.png', id: '1' },
                { curso: 'Geometria', logo: 'images/iconos/cursos/circle/geometria.png', id: '1' },
                { curso: 'Historia', logo: 'images/iconos/cursos/circle/historia.png', id: '1' },
                { curso: 'Quimica', logo: 'images/iconos/cursos/circle/quimica.png', id: '1' },
                { curso: 'rm', logo: 'images/iconos/cursos/circle/rm.png', id: '1' },
                { curso: 'rv', logo: 'images/iconos/cursos/circle/rv.png', id: '1' },
            ],

            power: 78,
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
</style>
