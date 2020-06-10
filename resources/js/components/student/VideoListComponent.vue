<template>
    <section class="grey lighten-4">

            <template v-for="asignaturass in response_data.asignatura">
                <v-container v-if="response_data.view_a === 'true'">
                    <v-row>
                        <v-col md="7" class="overflow-y-auto">
                            <div class="h-100">
                                <v-card flat tile>
                                    <v-card-text>
                                        <v-row>
                                            <v-col md="auto">

                                                <v-avatar>
                                                    <img
                                                        :src="asignaturass.logo"
                                                        alt="John"
                                                    >
                                                </v-avatar>

                                            </v-col>
                                            <v-col>

                                                <h1 class="small font-weight-bold">{{asignaturass.nombre}}</h1>

                                                <v-divider class="my-3"></v-divider>
                                                <v-row align="center" no-gutters>
                                                    <v-col md="auto">
                                                <span class="text--secondary caption font-weight-bold mr-5">
                                                    Docente:
                                                </span>
                                                    </v-col>
                                                    <v-col>
                                                        <v-list-item class="grow pa-0">
                                                            <v-list-item-avatar color="grey darken-3 my-0">
                                                                <v-img
                                                                    class="elevation-6"
                                                                    src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                                                ></v-img>
                                                            </v-list-item-avatar>

                                                            <v-list-item-content class="pa-0">
                                                                <v-list-item-title>{{asignaturass.docente.name}}</v-list-item-title>
                                                            </v-list-item-content>

                                                        </v-list-item>
                                                    </v-col>
                                                </v-row>
                                            </v-col>
                                        </v-row>

                                    </v-card-text>
                                </v-card>


                                <v-row>
                                    <v-col>
                                        <v-card flat tile>
                                            <v-tabs
                                                v-model="content"
                                                color="light-blue"
                                            >
                                                <v-tab href="#contenido" class="text-capitalize font-weight-medium">
                                                    Contenido del curso
                                                </v-tab>
                                                <v-tab href="#vivo" class="text-capitalize font-weight-medium">
                                                    <v-badge
                                                        color="red"
                                                        content="live"
                                                        offset-y="8"
                                                    >
                                                        Videos de clases en vivo
                                                    </v-badge>
                                                </v-tab>
                                            </v-tabs>

                                            <v-card-text>
                                                <v-tabs-items v-model="content">
                                                    <v-tab-item
                                                        value="contenido"
                                                    >
                                                        <v-alert
                                                            prominent
                                                            type="error"
                                                        >
                                                            <v-row align="center">
                                                                <v-col class="grow">Cuenta gratis inicie plan para una mejor experiencia.</v-col>
                                                                <v-col class="shrink">
                                                                    <v-btn>Iniciar plan</v-btn>
                                                                </v-col>
                                                            </v-row>
                                                        </v-alert>

                                                        <template v-for="tema in asignaturass.temas">

                                                            <h3 class="title grey--text text--darken-3 mt-5 mb-3 font-weight-bold"><v-icon>mdi-chevron-right</v-icon>{{tema.nombre}}</h3>

                                                            <template v-for="sub_temas in tema.sub_temas">

                                                                <v-card tile outlined :href="'/student/'+asignaturass.id+'/video/'+sub_temas.id" class="mb-3" v-if="sub_temas.free === 1">
                                                                    <v-row no-gutters align="center">
                                                                        <v-col md="3" class="position-relative">
                                                                            <v-img src="https://thumbs.cdn.mdstrm.com/thumbs/512e13acaca1ebcd2f000279/thumb_5db771220331cd0724cdf821_5db771220331cd0724cdf825_42s.jpg" aspect-ratio="1.8"></v-img>
                                                                        </v-col>
                                                                        <v-col class="px-3">
                                                                            <h3 class="small font-weight-bold mb-2">{{sub_temas.titulo}}</h3>
                                                                            <span><v-icon small>mdi-clock</v-icon> 07:00 min</span>
<!--                                                                            <span class="d-block green&#45;&#45;text"><v-icon color="green" small>mdi-lock</v-icon> Contenido no disponible</span>-->
                                                                        </v-col>
                                                                    </v-row>
                                                                </v-card>
                                                                <v-card tile outlined class="mb-3" v-else>
                                                                    <v-row no-gutters align="center">
                                                                        <v-col md="3" class="position-relative">
                                                                            <v-img src="https://thumbs.cdn.mdstrm.com/thumbs/512e13acaca1ebcd2f000279/thumb_5db771220331cd0724cdf821_5db771220331cd0724cdf825_42s.jpg" aspect-ratio="1.8"></v-img>
                                                                        </v-col>
                                                                        <v-col class="px-3">
                                                                            <h3 class="small font-weight-bold mb-2">{{sub_temas.titulo}}</h3>
                                                                            <span><v-icon small>mdi-clock</v-icon> 07:00 min</span>
                                                                            <span class="d-block green--text"><v-icon color="green" small>mdi-lock</v-icon> Contenido disponible en version expert</span>
                                                                        </v-col>
                                                                    </v-row>
                                                                </v-card>

                                                            </template>
                                                        </template>


                                                    </v-tab-item>

                                                    <v-tab-item
                                                        value="vivo"
                                                    >

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
                                            </v-card-text>

                                        </v-card>
                                    </v-col>
                                </v-row>

                            </div>
                        </v-col>
                        <v-col md="5">

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
                                        class="mb-3"
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
                                        class="mb-3"
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

                <v-container v-if="response_data.view_p === 'true'">
                    <v-row>
                        <v-col md="7" class="overflow-y-auto">
                            <div class="h-100">
                                <v-card flat tile>
                                    <v-card-text>
                                        <v-row>
                                            <v-col md="auto">

                                                <v-avatar>
                                                    <img
                                                        :src="'../../../images/iconos/cursos/circle/algebra.png'"
                                                        alt="John"
                                                    >
                                                </v-avatar>

                                            </v-col>
                                            <v-col>
                                                <h1 class="small font-weight-bold">Algebra</h1>
                                                <v-divider class="my-3"></v-divider>
                                                <v-row align="center" no-gutters>
                                                    <v-col md="auto">
                                                <span class="text--secondary caption font-weight-bold mr-5">
                                                    Docente:
                                                </span>
                                                    </v-col>
                                                    <v-col>
                                                        <v-list-item class="grow pa-0">
                                                            <v-list-item-avatar color="grey darken-3 my-0">
                                                                <v-img
                                                                    class="elevation-6"
                                                                    src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                                                ></v-img>
                                                            </v-list-item-avatar>

                                                            <v-list-item-content class="pa-0">
                                                                <v-list-item-title>Evan You</v-list-item-title>
                                                            </v-list-item-content>

                                                        </v-list-item>
                                                    </v-col>
                                                </v-row>
                                            </v-col>
                                        </v-row>

                                    </v-card-text>
                                </v-card>


                                <v-row>
                                    <v-col>
                                        <v-card flat tile>
                                            <v-tabs
                                                v-model="content"
                                                color="light-blue"
                                            >
                                                <v-tab href="#contenido" class="text-capitalize font-weight-medium">
                                                    Contenido del curso
                                                </v-tab>
                                                <v-tab href="#vivo" class="text-capitalize font-weight-medium">
                                                    <v-badge
                                                        color="red"
                                                        content="live"
                                                        offset-y="8"
                                                    >
                                                        Videos de clases en vivo
                                                    </v-badge>
                                                </v-tab>
                                            </v-tabs>

                                            <v-card-text>
                                                <v-tabs-items v-model="content">
                                                    <v-tab-item
                                                        value="contenido"
                                                    >

                                                        <v-row align="center" class="py-4">
                                                            <v-col>
                                                                <h4>Progreso del curso: 0/23 contenidos(0%)</h4>
                                                                <v-progress-linear
                                                                    v-model="valueDeterminate"
                                                                    color="deep-purple accent-4"
                                                                ></v-progress-linear>
                                                            </v-col>
                                                            <v-col>
                                                                <v-btn class="ma-2" tile outlined color="light-blue">
                                                                    <v-icon left>mdi-lock</v-icon> Iniciar plan
                                                                </v-btn>
                                                            </v-col>
                                                        </v-row>

                                                        <h3 class="title grey--text text--darken-3 mt-5 mb-3 font-weight-bold">Teoria de exponenetes</h3>

                                                        <v-card tile outlined href="/student/algebra/video/" class="mb-3">

                                                            <v-row no-gutters align="center">
                                                                <v-col md="3" class="position-relative">
                                                                    <v-img src="https://thumbs.cdn.mdstrm.com/thumbs/512e13acaca1ebcd2f000279/thumb_5db771220331cd0724cdf821_5db771220331cd0724cdf825_42s.jpg" aspect-ratio="1.8"></v-img>
                                                                </v-col>
                                                                <v-col class="px-3">
                                                                    <h3 class="small font-weight-bold mb-2">Potencia de potencia</h3>
                                                                    <span><v-icon small>mdi-clock</v-icon> 07:00 min</span>
                                                                    <span class="d-block green--text"><v-icon color="green" small>mdi-lock</v-icon> Contenido no disponible</span>
                                                                </v-col>
                                                            </v-row>

                                                        </v-card>

                                                        <v-card tile outlined class="mb-3">

                                                            <v-row no-gutters align="center">
                                                                <v-col md="3" class="position-relative">
                                                                    <v-img src="https://thumbs.cdn.mdstrm.com/thumbs/512e13acaca1ebcd2f000279/thumb_5db771220331cd0724cdf821_5db771220331cd0724cdf825_42s.jpg" aspect-ratio="1.8"></v-img>
                                                                    <v-avatar color="grey darken-3" class="video-lock-box">
                                                                        <v-icon dark>mdi-lock</v-icon>
                                                                    </v-avatar>
                                                                </v-col>
                                                                <v-col class="px-3">
                                                                    <h3 class="small font-weight-bold mb-2">Potencia de potencia</h3>
                                                                    <span><v-icon small>mdi-clock</v-icon> 07:00 min</span>
                                                                    <span class="d-block green--text"><v-icon color="green" small>mdi-lock</v-icon> Contenido no disponible</span>
                                                                </v-col>
                                                            </v-row>

                                                        </v-card>

                                                        <h3 class="title grey--text text--darken-3 mt-5 mb-3 font-weight-bold">Teoria de exponenetes</h3>

                                                        <v-card tile outlined class="mb-3">

                                                            <v-row no-gutters align="center">
                                                                <v-col md="3" class="position-relative">
                                                                    <v-img src="https://thumbs.cdn.mdstrm.com/thumbs/512e13acaca1ebcd2f000279/thumb_5db771220331cd0724cdf821_5db771220331cd0724cdf825_42s.jpg" aspect-ratio="1.8"></v-img>
                                                                </v-col>
                                                                <v-col class="px-3">
                                                                    <h3 class="small font-weight-bold mb-2">Potencia de potencia</h3>
                                                                    <span><v-icon small>mdi-clock</v-icon> 07:00 min</span>
                                                                    <span class="d-block green--text"><v-icon color="green" small>mdi-lock</v-icon> Contenido no disponible</span>
                                                                </v-col>
                                                            </v-row>

                                                        </v-card>

                                                        <v-card tile outlined class="mb-3">

                                                            <v-row no-gutters align="center">
                                                                <v-col md="3" class="position-relative">
                                                                    <v-img src="https://thumbs.cdn.mdstrm.com/thumbs/512e13acaca1ebcd2f000279/thumb_5db771220331cd0724cdf821_5db771220331cd0724cdf825_42s.jpg" aspect-ratio="1.8"></v-img>
                                                                    <v-avatar color="grey darken-3" class="video-lock-box">
                                                                        <v-icon dark>mdi-lock</v-icon>
                                                                    </v-avatar>
                                                                </v-col>
                                                                <v-col class="px-3">
                                                                    <h3 class="small font-weight-bold mb-2">Potencia de potencia</h3>
                                                                    <span><v-icon small>mdi-clock</v-icon> 07:00 min</span>
                                                                    <span class="d-block green--text"><v-icon color="green" small>mdi-lock</v-icon> Contenido no disponible</span>
                                                                </v-col>
                                                            </v-row>

                                                        </v-card>


                                                    </v-tab-item>

                                                    <v-tab-item
                                                        value="vivo"
                                                    >

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
                                            </v-card-text>

                                        </v-card>
                                    </v-col>
                                </v-row>

                            </div>
                        </v-col>
                        <v-col md="5">

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
                                        class="mb-3"
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
                                        class="mb-3"
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

    </section>

</template>

<script>
    export default {
        props: ['idcurso'],
        data () {
            return {
                descripcion: null,
                tabs: null,
                content: null,
                offsetTop: 0,
                valueDeterminate: '',

                response_data: [],
            }
        },
        methods: {
            onScroll(e) {
                this.offsetTop = e.target.scrollTop
            }
        },
        created() {
            axios.get('/students/getCursosAlumno/'+this.idcurso).then(res=>{
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
    .video-lock-box{
        position: absolute;
        top: 20%;
        left: 30%;
        z-index: 20;
    }
</style>

