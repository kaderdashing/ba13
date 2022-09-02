<template>
  <div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
        </div>
        <br>
              <component 
                   v-bind:is="steps[step]"
                   v-bind:formValues="values"
                    >
              </component>
       <div class="">
        <button 
        class="btn btn-primary gauche"
        v-on:click="previousstep"  >
        presedent</button>
        <button 
        class="btn btn-primary right"
        v-on:click="nextstep"     >
        suivant</button>
      </div>
  </div>
</template>

<script>
import { ref } from 'vue';
import FinalStep from './steps/FinalStep.vue';
import SecendStep from './steps/SecendStep.vue';
import FirstStep from './steps/FirstStep.vue';
import ThirdStep from './steps/ThirdStep.vue';
import useForm from './composable/FormValues' ;


const steps =[
  FirstStep,
  SecendStep,
  ThirdStep,
  FinalStep
] ;


  export default {
      components: { FirstStep,SecendStep,ThirdStep,FinalStep } ,
      setup (props){
        
        return{
          steps,step,previousstep,nextstep,values
        }
      }
  }

  const step = ref(0);
  const previousstep = () => {
    step.value--
  } ;
  const nextstep = () => {
    step.value++
  } ;
  const {values} = useForm() ;
</script>   

<style>

.right {
  position: absolute;
  right: 10%;
  
}



</style>