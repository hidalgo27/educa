<template>
    <section>
        <v-navigation-drawer
            permanent
            expand-on-hover
            absolute
            dense
        >
            <v-list>
                <v-list-item class="px-2">
                    <v-list-item-avatar>
                        <v-img :src="'../../../images/iconos/cursos/circle/algebra.png'"></v-img>
                    </v-list-item-avatar>
                    <v-list-item-title>Algebra</v-list-item-title>
                </v-list-item>

            </v-list>

            <v-divider></v-divider>

            <v-list
                nav
                dense
            >
                <v-list-item link>
                    <v-list-item-icon>
                        <v-avatar color="green accent-4" size="25">
                            <v-icon class="caption font-weight-bold white--text ">mdi-check</v-icon>
                        </v-avatar>
                    </v-list-item-icon>
                    <v-list-item-title>Exponentes</v-list-item-title>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-icon>
                        <v-avatar color="grey accent-4" size="25">
                            <span class="caption font-weight-bold white--text ">2</span>
                        </v-avatar>
                    </v-list-item-icon>
                    <v-list-item-title>Ecuaciones</v-list-item-title>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-icon>
                        <v-avatar color="grey accent-4" size="25">
                            <span class="caption font-weight-bold white--text ">3</span>
                        </v-avatar>
                    </v-list-item-icon>
                    <v-list-item-title>Inecuaciones</v-list-item-title>
                </v-list-item>
            </v-list>

        </v-navigation-drawer>

        <section class="pl-12">

            <v-container fluid class="pa-0">
                <v-row
                    no-gutters
                >
                    <v-col md="7">
                        <div class="pl-2">
                            <div class="video position-relative">
                                <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>
                            </div>
                            <v-row>
                                <v-col>
                                    <v-tabs
                                        v-model="descripcion"
                                        color="pink"
                                    >
                                        <v-tab href="#details" >
                                            Ordinario
                                        </v-tab>
                                    </v-tabs>
                                </v-col>
                                <v-col class="text-right">
                                    <v-btn
                                        color="light-blue"
                                        class="text-right mr-4"
                                        dark
                                    >
                                        Ecuaciones
                                        <v-icon>mdi-skip-next</v-icon>
                                    </v-btn>
                                </v-col>
                            </v-row>

                            <v-row>
                                <v-col>
                                    <v-tabs-items v-model="descripcion">

                                        <v-tab-item
                                            value="details"
                                        >
                                            <div class="px-4">
                                                <h3 class="grey--text text--darken-2">Teoria de exponentes</h3>
                                                <v-divider
                                                    class="mt-2 mb-4"
                                                ></v-divider>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aspernatur debitis ex expedita, hic illum inventore labore mollitia pariatur, quisquam quo quos rem sapiente sequi sint tenetur unde voluptates voluptatum?</p>

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
                                                                <span class="font-weight-bold">Fernando Langschwager</span>
                                                                <a href="" class="">@josuechandiasto</a>
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
                                        :src="'../../../images/iconos/cursos/circle/algebra.png'"
                                    >
                                    <v-icon
                                        color=""

                                    ></v-icon>
                                </v-avatar>
                                <a href="" class="font-weight-bold light-blue--text">Algebra</a>
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
                                    Aportessd
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
        </section>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                descripcion: null,
                tabs: null,
            }
        },
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

