<template>
  <section>
    <v-btn color="lime accent-4" class="text-right mr-4" @click="dialog = true">
      <v-icon>mdi-dock-window</v-icon>Trivias
    </v-btn>

    <v-dialog
      v-model="dialog"
      fullscreen
      hide-overlay
      transition="dialog-bottom-transition"
      scrollable
    >
      <v-card tile>
        <v-toolbar flat dark color="grey darken-3">
          <v-btn icon dark @click="dialog = false">
            <v-icon>mdi-close</v-icon>
          </v-btn>
          <v-toolbar-title>Trivias para {{ idsubtema }}</v-toolbar-title>
          <v-spacer></v-spacer>
          <!-- <v-toolbar-items>
            <v-btn dark text @click="dialog = false">Save</v-btn>
          </v-toolbar-items>-->
        </v-toolbar>
        <v-card-text>
          <v-stepper v-model="e1" :vertical="vertical" :alt-labels="altLabels">
            <template>
              <v-stepper-header>
                <template v-for="(pregunta,n) in preguntas">
                  <v-stepper-step
                    :key="`${n+1}-step`"
                    :complete="e1 > n+1"
                    :step="n+1"
                    :editable="editable"
                  >Preg. #{{ n+1 }}</v-stepper-step>

                  <v-divider v-if="n+1 !== steps.length" :key="n+1"></v-divider>
                </template>
              </v-stepper-header>

              <v-stepper-items>
                <v-stepper-content
                  v-for="(pregunta,n) in preguntas"
                  :key="`${n+1}-content`"
                  :step="n+1"
                >
                  <v-card class="mb-12" color="grey lighten-2" height="auto">
                    <v-row>
                      <v-col cols="12">
                        {{ pregunta.imagen }}
                        <v-img :src="pregunta.imagen" aspect-ratio="1" contain></v-img>
                      </v-col>
                      <v-col cols="12" class="text-center">{{ pregunta.titulo }}</v-col>
                    </v-row>
                    <v-divider></v-divider>
                    <v-row>
                      <v-col cols="12 pl-5">
                        <v-radio-group v-model="pregunta.rpt_alumnor">
                          <v-radio
                            v-for="(respuesta,i) in pregunta.respuestas"
                            :key="i"
                            :value="respuesta.rpt_pos"
                          >
                            <template v-slot:label>
                              <span
                                outlined
                                type="warning"
                                v-if="pregunta.rpt_alumno>=0"
                                :class="{'error--text':respuesta.correcta==0&&pregunta.rpt_alumno==respuesta.rpt_pos,
                                'green--text':respuesta.correcta==1&&pregunta.rpt_alumno==respuesta.rpt_pos,
                                'grey--text':pregunta.correcta==1&&pregunta.rpt_alumno!=respuesta.rpt_pos,
                                'grey--text':pregunta.rpt_alumno==0&&pregunta.rpt_alumno!=respuesta.rpt_pos}"
                              >
                                {{ respuesta.titulo }}
                                <span
                                  v-if="pregunta.rpt_alumno==pregunta.rpt_pos&&pregunta.rpt_alumno==respuesta.rpt_pos"
                                  class="green--text"
                                >
                                  (Respuesta coreccta
                                  <v-icon class="green--text">mdi-check</v-icon>)
                                </span>
                                <span
                                  v-if="respuesta.correcta==0&&pregunta.rpt_alumno==respuesta.rpt_pos"
                                  class="error--text"
                                >
                                  (Respuesta incoreccta
                                  <v-icon class="error--text">mdi-close</v-icon>)
                                </span>
                              </span>
                              <span v-else>{{ respuesta.titulo }}</span>
                            </template>
                          </v-radio>
                        </v-radio-group>
                      </v-col>
                    </v-row>
                    <v-divider></v-divider>
                  </v-card>

                  <v-btn color="lime accent-4" @click="responder(n+1,pregunta)">
                    <v-icon>mdi-send</v-icon>Responder
                  </v-btn>

                  <v-btn v-if="pregunta.habilitado" color="lime accent-4" @click="nextStep(n+1)">
                    Siguiente
                    <v-icon>mdi-chevron_right</v-icon>
                  </v-btn>

                  <!-- <v-btn text>Cancelar</v-btn> -->
                </v-stepper-content>
              </v-stepper-items>
            </template>
          </v-stepper>
        </v-card-text>

        <div style="flex: 1 1 auto;"></div>
      </v-card>
    </v-dialog>
  </section>
</template>

<script>
export default {
  props: ["idsubtema", "auth"],
  data() {
    return {
      dialog: false,
      e1: 1,
      steps: [],
      vertical: false,
      altLabels: true,
      editable: false,
      preguntas: {
        titulo: "",
        imagen: "",
        id: 0,
        respuestas: { id: 0, titulo: "", imagen: "", rpt: 0 }
      }
    };
  },
  created() {
    this.getData();
  },
  watch: {
    steps(val) {
      if (this.e1 > val) {
        this.e1 = val;
      }
    }
  },
  methods: {
    async asignarRespuesta() {
      //   console.log("estableciendo en inicial=1", "ok");

      console.log("estableciendo correcta[i]=0", "ok");
      for (let i in this.preguntas.respuestas) {
        //   console.log("recorrido", );
        if (this.inicialtItem.rpt == i) this.inicialtItem.respuestas[i].rpt = 1;
        else this.inicialtItem.respuestas[i].rpt = 0;
      }
      console.log("estableciendo correcta[pos]=1", "ok");
    },
    async getData() {
      let dato = await axios.get(
        "/students/trivias/test/" + this.idsubtema + "/" + this.auth.id
      );
      console.log("getData", dato);
      this.preguntas = await dato.data.map(datos => ({
        id: datos.id,
        rpt_pos: datos.rpt_pos,
        rpt_alumno: datos.rpt_alumno,
        rpt_alumnor: datos.rpt_alumno,
        titulo: datos.titulo,
        habilitado: datos.habilitado,
        imagen: datos.imagen
          ? `/students/trivias/tests/imagen/${datos.imagen.imagen_url}`
          : "",
        respuestas: datos.respuestas.map(respuesta => ({
          id: respuesta.id,
          titulo: respuesta.titulo,
          rpt_pos: respuesta.rpt_pos,
          correcta: respuesta.correcta,
          imagen: ""
        }))
      }));
    },
    onInput(val) {
      this.steps = parseInt(val);
    },
    async responder(n, pregunta) {
      let index_ = this.preguntas.indexOf(pregunta);
      let item = Object.assign({}, pregunta);
      console.log("pregunta", item);
      let rpt = await axios.post(
        `/students/trivias/test/${this.idsubtema}/${this.auth.id}`,
        item
      );
      if (rpt.data) {
        console.log("rpt", rpt);
        let rpt1 = await rpt.data.map(datos => ({
          id: datos.id,
          rpt_pos: datos.rpt_pos,
          rpt_alumno: datos.rpt_alumno,
          rpt_alumnor: datos.rpt_alumno,
          habilitado: 1,
          titulo: datos.titulo,
          imagen: datos.imagen
            ? `/students/trivias/tests/imagen/${datos.imagen.imagen_url}`
            : "",
          respuestas: datos.respuestas.map(respuesta => ({
            id: respuesta.id,
            titulo: respuesta.titulo,
            rpt_pos: respuesta.rpt_pos,
            correcta: respuesta.correcta,
            imagen: ""
          }))
        }));
        console.log("rpt1[0]", rpt1[0]);
        Object.assign(this.preguntas[index_], rpt1[0]);
      }
    },
    async nextStep(n) {
      if (n === this.steps.length) {
        this.e1 = 1;
      } else {
        this.e1 = n + 1;
      }
    }
  }
};
</script>

<style scoped>
</style>
