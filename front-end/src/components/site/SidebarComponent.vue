<template>
    <div>
        <h3 class="underline mb-5 wiki-side-title">Artigos mais acessados</h3>
        <div class="wiki-side">
            <div class="wiki-side-col">
                <div v-for="(item, index) in arraySubcategories" :key="index">
                    <a :href="item.link">
                        <div class="wiki-side-card" tile>
                            {{ item.name }}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    //import axios from 'axios';

    //const base_url = 'http://localhost:8080';

    export default {
        name: "SidebarComponent",
        data: () => ({
            arraySubcategories: [
                { name: 'Como gerar relatórios no sistema UniMestre?', link: 'https://google.com' },
                { name: 'Como gerar relatórios no sistema RM Totvs?', link: 'https://google.com' },
                { name: 'Como faço para acessar o portal do aluno?', link: 'https://google.com' },
                { name: 'Passo a passo do portal do aluno UniMestre.', link: 'https://google.com' },
                { name: 'Não consigo utilizar a bilbioteca virtual.', link: 'https://google.com' },
                { name: 'Onde encontro informações sobre meu curso?', link: 'https://google.com' },
                { name: 'Meu boleto está com data de vencimento errada.', link: 'https://google.com' },
                { name: 'Não consigo recuperar minha senha do portal.', link: 'https://google.com' },
                { name: 'Como excluir disciplina da minha grade?', link: 'https://google.com' },
            ]
        }),
    }
</script>

<style>
    .wiki-side-title {
        font-size: 16px;
        text-transform: uppercase;
        font-weight: normal;
        color: #222222;
    }

    .wiki-side {
        display: flex;
        flex-wrap: wrap;
    }

    .wiki-side .wiki-side-col {
        width: 100%;
        height: 100%;
        box-shadow: 0 0 0.2em #aaaaaa;
        -moz-box-shadow: 0 0 0.2em #aaaaaa;
        -webkit-box-shadow: 0 0 0.2em #aaaaaa;
        background: #f0f2f5;
    }

    .wiki-side .wiki-side-col .wiki-side-card {
        padding: 10px;
        border-left: 4px solid #555555;
        margin-bottom: 1px;
        line-height: 17px;
        /* background-image: linear-gradient(to right, #415c8e, #5572a8, #6a89c3, #6c97d1, #6fa5df); */
        background: #ffffff; 
    }

    .wiki-side .wiki-side-col .wiki-side-card:hover {
        border-left: 4px solid #999999;
        background: transparent;
    }

    .wiki-side .wiki-side-col a {
        font-size: 13px;
        text-decoration: none;
        color: #333333;
    }

    .wiki-side .wiki-side-col a:hover {
        color: #01579B;
    }

    @media only screen and (max-width: 992px) {
        .wiki-side {
            flex-direction: column;
        }

        .wiki-side-col {
            margin-left: 0 !important;
        }
    }
</style>