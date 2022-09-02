<template>
<div>
  <div class="center">
    <p v-text="props.formValues.hauteur"></p>
    <p v-text="props.formValues.largeur"></p>
    <p v-text="props.formValues.nom"></p>
    <p v-text="props.formValues.prenom"></p>
    <p v-text="props.formValues.adresse"></p>


  </div>
</div>
</template>
  
  <script setup>
  const props =defineProps(['formValues']);

  </script>
  
  <style scoped>
  .center{
    align-content: center;
  }
  </style>