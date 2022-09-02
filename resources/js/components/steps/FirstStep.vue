<template>
  <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">hauteur</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" id="staticEmail" placeholder="2500cm" v-model="props.formValues.hauteur" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label" >largeur</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="" placeholder="1800cm" v-model="props.formValues.largeur">
    </div>
  </div>
</form>
</template>

<script>

export default {
      setup (props){
        return{
          formValues
        }
      }
  }
</script>

<style>

</style>