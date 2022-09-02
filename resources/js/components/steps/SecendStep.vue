<template>
  <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">2</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" v-model="props.formValues.nom" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">2</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" placeholder="2" v-model="props.formValues.prenom">
    </div>
  </div>
</form>
</template>

<script setup>
  const props =defineProps(['formValues']);
  </script>
  

<style>

</style>