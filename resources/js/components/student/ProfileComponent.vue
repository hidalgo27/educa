<template>
    <v-container>
        <v-row>
            <v-col md="4">
                <v-card
                >
                    <v-img
                        src="https://cdn.vuetifyjs.com/images/lists/ali.png"
                        height="300px"
                        dark
                    >
                        <v-row class="fill-height">
                            <v-card-title class="d-block">
                                <v-btn dark icon href="/student/home" class="mr-4">
                                    <v-icon>mdi-chevron-left</v-icon>
                                </v-btn>
                            </v-card-title>

                            <v-spacer></v-spacer>

                            <v-card-title class="white--text text-center w-100 pt-12 w-100">
                                <div class="display-1 pt-12 mx-auto">Ali Conners</div>
                            </v-card-title>
                        </v-row>
                    </v-img>


                </v-card>
            </v-col>
            <v-col>
                <h3 class="headline mb-3 font-weight-bold">Tus datos</h3>

                <form>
                    <v-row>
                        <v-col>
                            <v-text-field
                                v-model="name"
                                :error-messages="nameErrors"
                                :counter="10"
                                label="Nombres"
                                required
                                @input="$v.name.$touch()"
                                @blur="$v.name.$touch()"
                            ></v-text-field>
                        </v-col>
                        <v-col>
                            <v-text-field
                                v-model="name"
                                :error-messages="nameErrors"
                                :counter="10"
                                label="Apellidos"
                                required
                                @input="$v.name.$touch()"
                                @blur="$v.name.$touch()"
                            ></v-text-field>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col>

                                <v-text-field
                                    v-model="email"
                                    :error-messages="emailErrors"
                                    label="E-mail"
                                    required
                                    @input="$v.email.$touch()"
                                    @blur="$v.email.$touch()"
                                ></v-text-field>

                        </v-col>

                        <v-col>

                                <v-text-field
                                    v-model="name"
                                    :error-messages="nameErrors"
                                    :counter="10"
                                    label="Telefono móvil"
                                    required
                                    @input="$v.name.$touch()"
                                    @blur="$v.name.$touch()"
                                ></v-text-field>

                        </v-col>

                    </v-row>

                    <v-row>
                        <v-col>
                            <v-text-field
                                v-model="name"
                                :error-messages="nameErrors"
                                :counter="10"
                                label="Dirección"
                                required
                                @input="$v.name.$touch()"
                                @blur="$v.name.$touch()"
                            ></v-text-field>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col>
                            <v-text-field
                                v-model="name"
                                :error-messages="nameErrors"
                                :counter="10"
                                label="Departamento"
                                required
                                @input="$v.name.$touch()"
                                @blur="$v.name.$touch()"
                            ></v-text-field>
                        </v-col>
                        <v-col>
                            <v-text-field
                                v-model="name"
                                :error-messages="nameErrors"
                                :counter="10"
                                label="Provincia"
                                required
                                @input="$v.name.$touch()"
                                @blur="$v.name.$touch()"
                            ></v-text-field>
                        </v-col>
                        <v-col>
                            <v-text-field
                                v-model="name"
                                :error-messages="nameErrors"
                                :counter="10"
                                label="Distrito"
                                required
                                @input="$v.name.$touch()"
                                @blur="$v.name.$touch()"
                            ></v-text-field>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col md="4">
                            <v-select
                                v-model="select"
                                :items="items"
                                :error-messages="selectErrors"
                                label="Nivel Educativo"
                                required
                                @change="$v.select.$touch()"
                                @blur="$v.select.$touch()"
                            ></v-select>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col>
                            <v-checkbox
                                v-model="checkbox"
                                :error-messages="checkboxErrors"
                                label="Do you agree?"
                                required
                                @change="$v.checkbox.$touch()"
                                @blur="$v.checkbox.$touch()"
                            ></v-checkbox>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col>
                            <v-btn class="mr-4" color="light-blue accent-2" dark @click="submit">Guardar Cambios</v-btn>
<!--                            <v-btn @click="clear">clear</v-btn>-->
                        </v-col>
                    </v-row>

                </form>

            </v-col>
        </v-row>

    </v-container>
</template>

<script>
    import { validationMixin } from 'vuelidate'
    import { required, maxLength, email } from 'vuelidate/lib/validators'

    export default {
        mixins: [validationMixin],

        validations: {
            name: { required, maxLength: maxLength(10) },
            email: { required, email },
            select: { required },
            checkbox: {
                checked (val) {
                    return val
                },
            },
        },

        data: () => ({
            name: '',
            email: '',
            select: null,
            items: [
                'Item 1',
                'Item 2',
                'Item 3',
                'Item 4',
            ],
            checkbox: false,

        }),

        computed: {
            checkboxErrors () {
                const errors = []
                if (!this.$v.checkbox.$dirty) return errors
                !this.$v.checkbox.checked && errors.push('You must agree to continue!')
                return errors
            },
            selectErrors () {
                const errors = []
                if (!this.$v.select.$dirty) return errors
                !this.$v.select.required && errors.push('Item is required')
                return errors
            },
            nameErrors () {
                const errors = []
                if (!this.$v.name.$dirty) return errors
                !this.$v.name.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.name.required && errors.push('Name is required.')
                return errors
            },
            emailErrors () {
                const errors = []
                if (!this.$v.email.$dirty) return errors
                !this.$v.email.email && errors.push('Must be valid e-mail')
                !this.$v.email.required && errors.push('E-mail is required')
                return errors
            },
        },

        methods: {
            submit () {
                this.$v.$touch()
            },
            clear () {
                this.$v.$reset()
                this.name = ''
                this.email = ''
                this.select = null
                this.checkbox = false
            },
        },
    }
</script>

<script>
    import { validationMixin } from 'vuelidate'
    import { required, maxLength, email } from 'vuelidate/lib/validators'

    export default {
        mixins: [validationMixin],

        validations: {
            name: { required, maxLength: maxLength(10) },
            email: { required, email },
            select: { required },
            checkbox: {
                checked (val) {
                    return val
                },
            },
        },

        data: () => ({
            name: '',
            email: '',
            select: null,
            items: [
                'Item 1',
                'Item 2',
                'Item 3',
                'Item 4',
            ],
            checkbox: false,
        }),

        computed: {
            checkboxErrors () {
                const errors = []
                if (!this.$v.checkbox.$dirty) return errors
                !this.$v.checkbox.checked && errors.push('You must agree to continue!')
                return errors
            },
            selectErrors () {
                const errors = []
                if (!this.$v.select.$dirty) return errors
                !this.$v.select.required && errors.push('Item is required')
                return errors
            },
            nameErrors () {
                const errors = []
                if (!this.$v.name.$dirty) return errors
                !this.$v.name.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.name.required && errors.push('Name is required.')
                return errors
            },
            emailErrors () {
                const errors = []
                if (!this.$v.email.$dirty) return errors
                !this.$v.email.email && errors.push('Must be valid e-mail')
                !this.$v.email.required && errors.push('E-mail is required')
                return errors
            },
        },

        methods: {
            submit () {
                this.$v.$touch()
            },
            clear () {
                this.$v.$reset()
                this.name = ''
                this.email = ''
                this.select = null
                this.checkbox = false
            },
        },
    }
</script>

<style scoped>

</style>
