<template>
  <div>
    <v-col cols="12">
      <v-text-field v-model="campoInput" label="Qual sua tarefa?" outlined clearable @keyup.enter="handleAddTarefa"></v-text-field>
    </v-col>
    <v-list flat subheader>
      <v-subheader>Lista de Tarefas</v-subheader>

      <v-list-item-group multiple active-class="">
        <div v-for="tarefa, index in $store.state.tarefas" :key="index">
          <Tarefa :tarefa="tarefa" />
        </div>
      </v-list-item-group>
    </v-list>
  </div>
</template>

<script>
  import Tarefa from '../../components/dashboard/tarefas/Tarefa.vue';

  export default {
    name: 'Tarefas',
    components: {
        Tarefa
    },
    data() {
      return {
        campoInput: null
      }
    },
    methods: {
      handleAddTarefa() {
        this.$store.commit('addTarefa', this.campoInput);
        this.campoInput = null;
      }
    }
  }
</script>