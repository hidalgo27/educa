<template>
    <v-container>

        <v-row>
            <v-col md="4">
                <v-card
                >
                    <v-img
                        :src="auth.avatar_original"
                        :alt="auth.name"
                        height="300px"
                        dark
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.3)"
                    >
                        <v-row class="fill-height">
                            <v-card-title class="d-block">

                                <v-btn dark icon class="mr-4" href="">
                                    <v-icon>mdi-pencil</v-icon>
                                </v-btn>

                            </v-card-title>

                            <v-spacer></v-spacer>

                            <v-card-title class="white--text text-center w-100 pt-12 w-100">
                                <div class="title pt-12 mx-auto">{{auth.name}}</div>
                            </v-card-title>
                        </v-row>
                    </v-img>

                    <v-list two-line>
                        <v-list-item @click="">
                            <v-list-item-icon>
                                <v-icon color="indigo">mdi-phone</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>{{auth.celular}}</v-list-item-title>
                                <v-list-item-subtitle>Mobile</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-icon>
                                <v-icon>mdi-message-text</v-icon>
                            </v-list-item-icon>
                        </v-list-item>

<!--                        <v-list-item @click="">-->
<!--                            <v-list-item-action></v-list-item-action>-->

<!--                            <v-list-item-content>-->
<!--                                <v-list-item-title>(323) 555-6789</v-list-item-title>-->
<!--                                <v-list-item-subtitle>Work</v-list-item-subtitle>-->
<!--                            </v-list-item-content>-->

<!--                            <v-list-item-icon>-->
<!--                                <v-icon>mdi-message-text</v-icon>-->
<!--                            </v-list-item-icon>-->
<!--                        </v-list-item>-->

                        <v-divider inset></v-divider>

                        <v-list-item @click="">
                            <v-list-item-icon>
                                <v-icon color="indigo">mdi-email</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>{{auth.email}}</v-list-item-title>
                                <v-list-item-subtitle>Personal</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>

<!--                        <v-list-item @click="">-->
<!--                            <v-list-item-action></v-list-item-action>-->

<!--                            <v-list-item-content>-->
<!--                                <v-list-item-title>ali_connors@example.com</v-list-item-title>-->
<!--                                <v-list-item-subtitle>Work</v-list-item-subtitle>-->
<!--                            </v-list-item-content>-->
<!--                        </v-list-item>-->

<!--                        <v-divider inset></v-divider>-->

<!--                        <v-list-item @click="">-->
<!--                            <v-list-item-icon>-->
<!--                                <v-icon color="indigo">mdi-map-marker</v-icon>-->
<!--                            </v-list-item-icon>-->

<!--                            <v-list-item-content>-->
<!--                                <v-list-item-title>1400 Main Street</v-list-item-title>-->
<!--                                <v-list-item-subtitle>Orlando, FL 79938</v-list-item-subtitle>-->
<!--                            </v-list-item-content>-->
<!--                        </v-list-item>-->
                    </v-list>
                </v-card>
            </v-col>
            <v-col>

                <template v-for="mostrar in show_1">
                    <template v-if="mostrar.view_a === 'true'">
                    <v-alert
                        icon="mdi-alert"
                        prominent
                        text
                        type="info"
                        class="mb-6"
                    >
                        <v-row align="center">
                            <v-col class="grow">Inicie su camino de ingreso a la Univerdidad. <strong>s/.99 soles por mes</strong> o s./250 soles por los 3 meses.</v-col>
                            <v-col class="shrink">
                                <v-btn color="primary" dark>Comenzar ahora</v-btn>
                            </v-col>
                        </v-row>
                    </v-alert>
                    </template>
                </template>

                <template v-for="mostrar in show_1">

                    <template v-if="mostrar.form === 'true'">

                    <v-alert
                        text
                        dense
                        color="teal"
                        class="pt-8"
                        border="left"
                    >
                        <h3 class="headline mb-3 font-weight-bold">Bienvenido a nuestra gran familia</h3>
                        <p>El grupo educativo Green le da la bienvenida y agradece su preferencia.</p>
                        <p>Escoja su objetivo y juntos los lograremos.</p>

                        <form>
                        <v-row>
                            <v-col class="d-flex" cols="12" sm="6">
                                <v-select
                                    v-model="universidades"
                                    :items="universidad"
                                    label="Universidad"
                                    item-text="text"
                                    item-value="id"
                                    outlined
                                    
                                    @input="getModalidad"
                                ></v-select>
                            </v-col>
                            <v-col class="d-flex" cols="12" sm="6">
                                <v-select
                                    v-model="modalidades"
                                    :items="modalidad"
                                    label="Modalidad"
                                    item-text="text"
                                    item-value="id"
                                    outlined
                                    @input="getGrupo"
                                ></v-select>
                            </v-col>
                            <v-col class="d-flex" cols="12" sm="6">
                                <v-select
                                    v-model="grupos"
                                    :items="grupo"
                                    item-text="text"
                                    item-value="id"
                                    label="Grupo"
                                    outlined
                                    @input="getCarreras"
                                ></v-select>
                            </v-col>
                            <v-col class="d-flex" cols="12" sm="6">
                                <v-select
                                    v-model="carreras"
                                    :items="carrera"
                                    item-text="text"
                                    item-value="id"
                                    label="Carrera Profesional"
                                    outlined
                                ></v-select>
                            </v-col>
                        </v-row>
                            <v-row justify="center" class="mb-5">
                                <v-col cols="12" sm="5">
                                    <v-btn x-large color="green accent-4" class="w-100" dark  @click="agregar">
                                        <span class="mx-2" v-show="load_text">Guardar</span>
                                        <v-progress-circular
                                            indeterminate
                                            color="white"
                                            v-show="load_circ"
                                        ></v-progress-circular>
                                    </v-btn>
                                </v-col>
                            </v-row>
                        </form>
                    </v-alert>


                    </template>

                    <template v-else>
<!--                        <template v-for="cursot in cursos">-->
<!--                            <template v-for="curso_m in cursos.modalidad_view">-->
<!--                                <template v-for="cursoc_m in cursot.modalidad">-->
<!--                                    <h2>{{cursoc_m}}</h2>-->
<!--                                </template>-->
<!--                            </template>-->
<!--                            <h3 class="headline mb-3 font-weight-bold">Tus cursos</h3>-->
<!--                        </template>-->
                        <!--                <p class="">Sus</p>-->

                        <v-card>
                        <template v-for="curso in cursos">
                            <v-alert text color="green" class="mb-0">
                            <h2 class="text-center grey--text text--darken-3">{{curso.modalidad_view.grupo.universidad.nombre}}</h2>
                            <h5 class="text-center grey--text text--darken-1">{{curso.modalidad_view.modalidad.titulo}} - {{curso.modalidad_view.grupo.descripcion}}</h5>
                            </v-alert>

                            <v-card-title>
                                <h4>Tus Cursos:</h4>
                            </v-card-title>
                            <v-card-text>
                            <template v-for="cursoss in curso.asignatura">
                                <v-card tile flat class=" mb-3">

                                    <v-row no-gutters align="center">
                                        <v-col md="2" class="position-relative">
                                            <v-img :src="cursoss.logo" aspect-ratio="2" contain></v-img>
                                        </v-col>
                                        <v-col class="px-3">
                                            <h3 class="small font-weight-bold mb-2">{{cursoss.nombre}}</h3>
                                            <!--                                    <v-progress-linear-->
                                            <!--                                        value="90"-->
                                            <!--                                        height="20"-->
                                            <!--                                        color="green accent-4"-->
                                            <!--                                        dark-->
                                            <!--                                    >-->
                                            <!--                                        <span class="caption">90%</span>-->
                                            <!--                                    </v-progress-linear>-->
                                            <!--                                    <p class="mt-2 font-weight-medium text&#45;&#45;secondary caption">15/16Materiales</p>-->
                                        </v-col>
                                        <v-col md="4">
                                            <v-btn class="w-100 text-capitalize" color="green accent-4" :href="'/student/curso/video-list/'+cursoss.id" dark>Continuar viendo curso</v-btn>
                                        </v-col>
                                    </v-row>

                                </v-card>
                            </template>
                            </v-card-text>
                        </template>
                        </v-card>

<!--                        <v-card tile flat class=" mb-3">-->

<!--                            <v-row no-gutters align="center">-->
<!--                                <v-col md="2" class="position-relative">-->
<!--                                    <v-img src="" aspect-ratio="2" contain></v-img>-->
<!--                                </v-col>-->
<!--                                <v-col class="px-3">-->
<!--                                    <h3 class="small font-weight-bold mb-2">Fisica</h3>-->
<!--                                    <v-progress-linear-->
<!--                                        value="50"-->
<!--                                        height="20"-->
<!--                                        color="amber"-->
<!--                                        dark-->
<!--                                    >-->
<!--                                        <span class="caption">50%</span>-->
<!--                                    </v-progress-linear>-->
<!--                                    <p class="mt-2 font-weight-medium text&#45;&#45;secondary caption">15/16Materiales</p>-->
<!--                                </v-col>-->
<!--                                <v-col md="4">-->
<!--                                    <v-btn class="w-100 text-capitalize" color="green accent-4" dark>Continuar viendo curso</v-btn>-->
<!--                                </v-col>-->
<!--                            </v-row>-->

<!--                        </v-card>-->

<!--                        <v-card tile flat class=" mb-3">-->

<!--                            <v-row no-gutters align="center">-->
<!--                                <v-col md="2" class="position-relative">-->
<!--                                    <v-img src="" aspect-ratio="2" contain></v-img>-->
<!--                                </v-col>-->
<!--                                <v-col class="px-3">-->
<!--                                    <h3 class="small font-weight-bold mb-2">Geometria</h3>-->
<!--                                    <v-progress-linear-->
<!--                                        value="15"-->
<!--                                        height="20"-->
<!--                                        color="red"-->
<!--                                        dark-->
<!--                                    >-->
<!--                                        <span class="caption">15%</span>-->
<!--                                    </v-progress-linear>-->
<!--                                    <p class="mt-2 font-weight-medium text&#45;&#45;secondary caption">15/16Materiales</p>-->
<!--                                </v-col>-->
<!--                                <v-col md="4">-->
<!--                                    <v-btn class="w-100 text-capitalize" color="green accent-4" dark>Continuar viendo curso</v-btn>-->
<!--                                </v-col>-->
<!--                            </v-row>-->

<!--                        </v-card>-->
                    </template>
                </template>

            </v-col>
        </v-row>

    </v-container>
</template>

<script>

    export default {
        props: ['auth'],
        data: () => ({
            show_1: [],
            universidades: [],
            modalidades: [],
            grupos: [],
            carreras: [],
            load_text: true,
            load_circ: false,

            universidad: [],
            modalidad: [],
            grupo: [],
            carrera: [],

            cursos: [],
        }),
        created() {
            axios.get('/getUniversidades').then(res=>{
                this.universidad = res.data;

            });

            axios.get('/getmatricula').then(res=>{
                // this.show_1 = res.data;
            });

            axios.get('/getCursos').then(res=>{
                const notaServidor = res.data;
                this.cursos = notaServidor;
                this.show_1 = notaServidor;
                // console.log(this.cursos);

            });

        },
        methods: {
            getModalidad() {
                axios.get('/getModalidad/'+this.universidades).then(res=>{
                    this.modalidad = res.data;
                    console.log(this.universidades);
                })
            },

            getGrupo() {
                // console.log(this.modalidades);
                axios.get('/getGrupo/'+this.universidades).then(res=>{
                    this.grupo = res.data;
                    // console.log(this.grupo);
                })
            },

            getCarreras() {
                console.log(this.grupos);
                axios.get('/getCarreras/'+this.grupos).then(res=>{
                    this.carrera = res.data;
                    // console.log(this.grupo);
                })
            },

            agregar(){

                let obj = {
                    universidadSelected: this.universidades,
                    modalidadSelected: this.modalidades,
                    grupoSelected: this.grupos,
                    carreraSelected: this.carreras,
                    idAlumno: this.auth,
                };
                const self = this;
                // const notaNueva = this.nota;
                // console.log(obj);
                // this.nota = {nombre: '', descripcion: ''};
                this.load_text= false;
                this.load_circ= true;
                axios.post('/students/matricular', obj)
                    .then((res) =>{
                        const notaServidor = res.data;
                        // this.show_1.push(notaServidor);
                        this.show_1 = notaServidor;
                        this.cursos = notaServidor;
                        // console.log(notaServidor);
                    })
            },

        }
    }
</script>

<style scoped>

</style>
