<template>
    <div>
        <h3 class="underline mb-5 wiki-cat-title">Categorias</h3>

        <section v-if="error">
            <v-alert text prominent icon="mdi-alert-circle" outlined type="error" v-if="(status_error != null) && (message_error != null)">
                <v-row align="center" no-gutters>
                    <v-col class="grow">
                        {{ 'Erro ' + status_error + ' - ' + message_error }}
                    </v-col>
                    <v-col class="shrink">
                        <v-btn rounded color="error"><v-icon>mdi-arrow-left</v-icon></v-btn>
                    </v-col>
                </v-row>
            </v-alert>
        </section>

        <section v-else>
            <!-- <div v-if="loading">Carregando...</div> -->

            <section v-if="loading">
                <div class="wiki-cat">
                    <div class="wiki-cat-col">
                        <v-sheet :color="`grey ${theme.isDark ? 'darken-2' : 'lighten-4'}`" class="pa-3">
                            <v-skeleton-loader class="mx-auto" max-width="100%" type="image"></v-skeleton-loader>
                        </v-sheet>
                    </div>
                </div>
            </section>

            <section v-else class="wiki-cat">
                <div class="wiki-cat-col" v-for="(categorie, index) in objCategories" :key="index">
                    <v-hover>
                        <template v-slot:default="{ hover }">
                            <router-link :to="`${$route.path + '/' + categorie.slug}`" class="text-decoration-none">
                                <v-card :elevation="hover ? 6 : 3" class="mx-auto pa-5" tile>
                                    <v-icon left size="30" color="#555555">mdi-view-quilt</v-icon> {{ categorie.categorie_name }}
                                </v-card>
                            </router-link>
                        </template>
                    </v-hover>
                </div>
            </section>
        </section>
    </div>
</template>

<script>
    export default {
        name: "CategoriesComponent",
        inject: {
            theme: {
                default: { isDark: false },
            },
        },
        data: () => ({
            error: false
        }),
        computed: {
            loading() {
                return this.$store.state.loading
            },
            objCategories() {
                return this.$store.state.categoriesSlug
            }
        },
        mounted() {
            this.$store.dispatch("getCategoriesByUnitSlug", { 
                loading: true,
                error: this.error,
                status_error: null,
                message_error: null,
                unit_slug: this.$route.params.unit_slug,
            });
        }
    }
</script>

<style>
    .wiki-cat-title {
        font-size: 16px;
        text-transform: uppercase;
        font-weight: normal;
        color: #222222;
    }

    .wiki-cat {
        display: flex;
        flex-wrap: wrap;
    }

    .wiki-cat .wiki-cat-col {
        flex: 1 0 25%;
        margin: 0 20px 20px 0;        
    }

    .wiki-cat .wiki-cat-col .v-card {
        font-size: 13px;
        text-decoration: none;
        color: #333333;
    }

    .wiki-cat .wiki-cat-col .v-card:hover {
        color: #01579B;      
    }

    @media only screen and (max-width: 992px) {
        .wiki-cat {
            flex-direction: column;
        }

        .wiki-cat .wiki-cat-col {
            margin-right: 0;
        }
    }
</style>