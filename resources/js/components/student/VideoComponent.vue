<template>
    <section>


            <template v-for="asignaturass in response_data.asignatura_all">

                <template v-if="response_data.view_a === 'true'">
                    <v-navigation-drawer
                        permanent
                        expand-on-hover
                        absolute
                        dense
                    >
                        <v-list>
                            <v-list-item class="px-2">
                                <v-list-item-avatar>
                                    <v-img :src="asignaturass.logo"></v-img>
                                </v-list-item-avatar>
                                <v-list-item-title>{{asignaturass.nombre}}</v-list-item-title>
                            </v-list-item>
                        </v-list>

                        <v-divider></v-divider>

                        <v-list
                            nav
                            dense
                        >
                            <template v-for="tema in asignaturass.temas">
                                <template v-for="sub_temas in tema.sub_temas">
                                    <v-list-item href="#" link v-if="sub_temas.free === 1">
                                        <v-list-item-icon>
                                            <v-avatar color="green accent-4" size="25">
                                                <v-icon class="caption font-weight-bold white--text ">mdi-check</v-icon>
                                            </v-avatar>
                                        </v-list-item-icon>
                                        <v-list-item-title>{{sub_temas.titulo}}</v-list-item-title>
                                    </v-list-item>

                                    <v-list-item link v-else>
                                        <v-list-item-icon>
                                            <v-avatar color="green accent-4" size="25">
                                                <v-icon class="caption font-weight-bold white--text ">mdi-check</v-icon>
                                            </v-avatar>
                                        </v-list-item-icon>
                                        <v-list-item-title>{{sub_temas.titulo}}</v-list-item-title>
                                    </v-list-item>
                                </template>
                            </template>

                        </v-list>

                    </v-navigation-drawer>
                </template>
                <template v-if="response_data.view_p === 'true'">
                    <v-navigation-drawer
                        permanent
                        expand-on-hover
                        absolute
                        dense
                    >
                        <v-list>
                            <v-list-item class="px-2">
                                <v-list-item-avatar>
                                    <v-img :src="asignaturass.logo"></v-img>
                                </v-list-item-avatar>
                                <v-list-item-title>{{asignaturass.nombre}}</v-list-item-title>
                            </v-list-item>
                        </v-list>

                        <v-divider></v-divider>

                        <v-list
                            nav
                            dense
                        >
                            <template v-for="tema in asignaturass.temas">
                                <template v-for="sub_temas in tema.sub_temas">
                                    <v-list-item href="#" link>
                                        <v-list-item-icon>
                                            <v-avatar color="green accent-4" size="25">
                                                <v-icon class="caption font-weight-bold white--text ">mdi-check</v-icon>
                                            </v-avatar>
                                        </v-list-item-icon>
                                        <v-list-item-title>{{sub_temas.titulo}}</v-list-item-title>
                                    </v-list-item>

                                </template>
                            </template>

                        </v-list>

                    </v-navigation-drawer>
                </template>
            </template>

            <section class="pl-12">

                <template v-for="asignaturassc in response_data.asignatura">
                    <template v-if="response_data.view_a === 'true'">
                        <template v-for="temass in asignaturassc.temas">
                            <template v-for="sub_temass in temass.sub_temas">
                                <v-container fluid class="pa-0">
                                    <v-row
                                        no-gutters
                                    >
                                        <v-col md="7">
                                            <div class="pl-2">
                                                <div class="video position-relative" v-html="sub_temass.video_url">
                                                </div>
                                                <v-row align="end" >
                                                    <v-col>
                                                        <v-tabs
                                                            v-model="descripcion"
                                                            color="pink"
                                                        >
                                                            <v-tab href="#details" >
                                                                {{temass.nombre}}
                                                            </v-tab>
                                                        </v-tabs>
                                                    </v-col>
                                                    <v-col class="text-right">

                                                        <trivia-component :idsubtema="sub_temass.id" :auth="auth"></trivia-component>

                                                    </v-col>
                                                </v-row>

                                                <v-row>
                                                    <v-col>
                                                        <v-tabs-items v-model="descripcion">
                                                            <v-tab-item
                                                                value="details"
                                                            >
                                                                <div class="px-4">
                                                                    <h3 class="grey--text text--darken-2">{{sub_temass.titulo}}</h3>
                                                                    <v-divider
                                                                        class="mt-2 mb-4"
                                                                    ></v-divider>

                                                                    {{sub_temass.descripcion}}

                                                                    <v-row align="center">
                                                                        <v-col md="6">
                                                                            <v-row>
                                                                                <v-col md="2">
                                                                                    <v-avatar
                                                                                        size="36px"
                                                                                    >
                                                                                        <img
                                                                                            alt="Avatar"
                                                                                            src="https://avatars0.githubusercontent.com/u/9064066?v=4&s=460"
                                                                                        >
                                                                                        <v-icon
                                                                                            color=""

                                                                                        ></v-icon>
                                                                                    </v-avatar>
                                                                                </v-col>
                                                                                <v-col md="10" class="">
                                                                                    <span class="font-weight-bold">{{asignaturassc.docente.name}}</span>
                                                                                    <a href="" class="">{{asignaturassc.docente.email}}</a>
                                                                                </v-col>
                                                                            </v-row>
                                                                        </v-col>
                                                                    </v-row>

                                                                </div>
                                                            </v-tab-item>

                                                        </v-tabs-items>
                                                    </v-col>
                                                </v-row>
                                            </div>
                                        </v-col>
                                        <v-col md="5" class="grey lighten-4 position-relative">
                                            <v-row no-gutters align="center" class="my-3">
                                                <v-col md="12">
                                                    <v-avatar
                                                        size="36px"
                                                        class="ml-2 px-5"
                                                    >
                                                        <img
                                                            alt="Avatar"
                                                            :src="asignaturassc.logo"
                                                        >
                                                        <v-icon
                                                            color=""

                                                        ></v-icon>
                                                    </v-avatar>
                                                    <a href="../../../student/algebra/video/list" class="font-weight-bold light-blue--text">{{asignaturassc.nombre}}</a>
                                                </v-col>
                                            </v-row>
                                            <v-tabs
                                                v-model="tabs"
                                                grow
                                                color="light-blue"
                                            >
                                                <v-tab href="#aportes" class="text-capitalize font-weight-medium">
                                                    <v-badge
                                                        color="grey"
                                                        content="6"
                                                        offset-y="8"
                                                    >
                                                        Aportes
                                                    </v-badge>
                                                </v-tab>
                                                <v-tab href="#preguntas" class="text-capitalize font-weight-medium">
                                                    <v-badge
                                                        color="grey"
                                                        content="6"
                                                        offset-y="8"
                                                    >
                                                        Preguntas
                                                    </v-badge>
                                                </v-tab>
                                                <v-tab href="#archivos" class="text-capitalize font-weight-medium">
                                                    <v-badge
                                                        color="grey"
                                                        content="6"
                                                        offset-y="10"
                                                        offset-x="1"
                                                    >
                                                        Archivos y enlaces
                                                    </v-badge>
                                                </v-tab>
                                            </v-tabs>
                                            <v-tabs-items v-model="tabs" class="py-4 grey lighten-4">
                                                <v-tab-item
                                                    value="aportes"
                                                >
                                                    <v-card
                                                        class="mx-3 mb-3"
                                                        flat
                                                    >
                                                        <v-card-title class="py-0">
                                                            <v-list-item class="grow pa-0">
                                                                <v-list-item-avatar color="grey darken-3">
                                                                    <v-img
                                                                        class="elevation-6"
                                                                        src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                                                    ></v-img>
                                                                </v-list-item-avatar>

                                                                <v-list-item-content>
                                                                    <v-list-item-title>Evan You</v-list-item-title>
                                                                </v-list-item-content>

                                                            </v-list-item>
                                                        </v-card-title>

                                                        <v-card-text class="">
                                                            "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                                                        </v-card-text>

                                                        <v-card-actions>

                                                            <v-btn icon color="light-blue">
                                                                <v-icon>mdi-reply</v-icon>
                                                            </v-btn>

                                                            <v-badge
                                                                color="grey"
                                                                content="6"
                                                                offset-x="10"
                                                                offset-y="15"
                                                            >
                                                                <v-btn icon>
                                                                    <v-icon>mdi-heart</v-icon>
                                                                </v-btn>
                                                            </v-badge>

                                                            <v-badge
                                                                color="grey"
                                                                content="6"
                                                                offset-x="10"
                                                                offset-y="15"
                                                            >
                                                                <v-btn icon>
                                                                    <v-icon>mdi-share-variant</v-icon>
                                                                </v-btn>
                                                            </v-badge>
                                                        </v-card-actions>
                                                    </v-card>

                                                    <v-card
                                                        class="mx-3 mb-3"
                                                        flat
                                                    >
                                                        <v-card-title class="py-0">
                                                            <v-list-item class="grow pa-0">
                                                                <v-list-item-avatar color="grey darken-3">
                                                                    <v-img
                                                                        class="elevation-6"
                                                                        src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                                                    ></v-img>
                                                                </v-list-item-avatar>

                                                                <v-list-item-content>
                                                                    <v-list-item-title>Evan You</v-list-item-title>
                                                                </v-list-item-content>

                                                            </v-list-item>
                                                        </v-card-title>

                                                        <v-card-text class="">
                                                            "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                                                        </v-card-text>

                                                        <v-card-actions>

                                                            <v-btn icon color="light-blue">
                                                                <v-icon>mdi-reply</v-icon>
                                                            </v-btn>

                                                            <v-badge
                                                                color="grey"
                                                                content="6"
                                                                offset-x="10"
                                                                offset-y="15"
                                                            >
                                                                <v-btn icon>
                                                                    <v-icon>mdi-heart</v-icon>
                                                                </v-btn>
                                                            </v-badge>

                                                            <v-badge
                                                                color="grey"
                                                                content="6"
                                                                offset-x="10"
                                                                offset-y="15"
                                                            >
                                                                <v-btn icon>
                                                                    <v-icon>mdi-share-variant</v-icon>
                                                                </v-btn>
                                                            </v-badge>
                                                        </v-card-actions>
                                                    </v-card>

                                                </v-tab-item>

                                                <v-tab-item
                                                    value="preguntas"
                                                >

                                                    <v-card
                                                        class="mx-3 mb-3"
                                                        flat
                                                    >
                                                        <v-card-title class="py-0">
                                                            <v-list-item class="grow pa-0">
                                                                <v-list-item-avatar color="grey darken-3">
                                                                    <v-img
                                                                        class="elevation-6"
                                                                        src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                                                    ></v-img>
                                                                </v-list-item-avatar>

                                                                <v-list-item-content>
                                                                    <v-list-item-title>Evan You</v-list-item-title>
                                                                </v-list-item-content>

                                                            </v-list-item>
                                                        </v-card-title>

                                                        <v-card-text class="">
                                                            "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                                                        </v-card-text>

                                                        <v-card-actions>

                                                            <v-btn icon color="light-blue">
                                                                <v-icon>mdi-reply</v-icon>
                                                            </v-btn>

                                                            <v-badge
                                                                color="grey"
                                                                content="6"
                                                                offset-x="10"
                                                                offset-y="15"
                                                            >
                                                                <v-btn icon>
                                                                    <v-icon>mdi-heart</v-icon>
                                                                </v-btn>
                                                            </v-badge>

                                                            <v-badge
                                                                color="grey"
                                                                content="6"
                                                                offset-x="10"
                                                                offset-y="15"
                                                            >
                                                                <v-btn icon>
                                                                    <v-icon>mdi-share-variant</v-icon>
                                                                </v-btn>
                                                            </v-badge>
                                                        </v-card-actions>
                                                    </v-card>

                                                    <v-card
                                                        class="mx-3 mb-3"
                                                        flat
                                                    >
                                                        <v-card-title class="py-0">
                                                            <v-list-item class="grow pa-0">
                                                                <v-list-item-avatar color="grey darken-3">
                                                                    <v-img
                                                                        class="elevation-6"
                                                                        src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                                                    ></v-img>
                                                                </v-list-item-avatar>

                                                                <v-list-item-content>
                                                                    <v-list-item-title>Evan You</v-list-item-title>
                                                                </v-list-item-content>

                                                            </v-list-item>
                                                        </v-card-title>

                                                        <v-card-text class="">
                                                            "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                                                        </v-card-text>

                                                        <v-card-actions>

                                                            <v-btn icon color="light-blue">
                                                                <v-icon>mdi-reply</v-icon>
                                                            </v-btn>

                                                            <v-badge
                                                                color="grey"
                                                                content="6"
                                                                offset-x="10"
                                                                offset-y="15"
                                                            >
                                                                <v-btn icon>
                                                                    <v-icon>mdi-heart</v-icon>
                                                                </v-btn>
                                                            </v-badge>

                                                            <v-badge
                                                                color="grey"
                                                                content="6"
                                                                offset-x="10"
                                                                offset-y="15"
                                                            >
                                                                <v-btn icon>
                                                                    <v-icon>mdi-share-variant</v-icon>
                                                                </v-btn>
                                                            </v-badge>
                                                        </v-card-actions>
                                                    </v-card>

                                                </v-tab-item>

                                                <v-tab-item
                                                    value="archivos"
                                                >

                                                    <v-list>
                                                        <v-list-item-group color="primary">
                                                            <v-list-item>
                                                                <v-list-item-icon>
                                                                    <v-badge
                                                                        bottom
                                                                        icon="mdi-download"
                                                                        offset-y="15"
                                                                    >
                                                                        <v-icon>mdi-file-document-outline</v-icon>
                                                                    </v-badge>
                                                                </v-list-item-icon>
                                                                <v-list-item-content>
                                                                    <v-list-item-title>Material del cusco</v-list-item-title>
                                                                </v-list-item-content>
                                                                <v-list-item-icon>
                                                                    <v-icon>mdi-download</v-icon>
                                                                </v-list-item-icon>
                                                            </v-list-item>

                                                            <v-list-item>
                                                                <v-list-item-icon>

                                                                    <v-icon color="blue">mdi-link</v-icon>

                                                                </v-list-item-icon>
                                                                <v-list-item-content>
                                                                    <v-list-item-title>Material del cusco</v-list-item-title>
                                                                </v-list-item-content>
                                                                <v-list-item-icon>
                                                                    <v-icon>mdi-link</v-icon>
                                                                </v-list-item-icon>
                                                            </v-list-item>

                                                        </v-list-item-group>
                                                    </v-list>

                                                </v-tab-item>
                                            </v-tabs-items>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </template>
                        </template>
                    </template>
                </template>
            </section>

    </section>
</template>

<script>
    export default {
        props: ['idcurso','idvideo','auth'],
        data () {
            return {
                descripcion: null,
                tabs: null,
                response_data: [],

            }
        },
        created() {
            axios.get('/students/getCursosAlumnoVideo/'+this.idcurso+'/'+this.idvideo).then(res=>{
                this.response_data = res.data;


                // console.log(res.data);
            })
        }
    }
</script>

<style>
    .v-tabs-slider-wrapper{
        z-index: 0 !important;
    }
    .green-cover{
        background: rgba(0,0,0,0.73);
        position: absolute;
        color: #fff;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 20;
        height: 100vh;
        width: 100%;
    }
    .video{
        height: 52vh;
    }
    .video iframe{
        height: 52vh;
        width: 100%;
    }
</style>

