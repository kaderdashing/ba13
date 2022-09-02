import { reactive } from "vue";

export default function useForm() {
    const values = reactive({
        hauteur: '',
        largeur: '',
        nom: '',
        prenom: '',
        adresse: ''
    });
    return {
        values,
    }
}