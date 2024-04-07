import { defineStore } from 'pinia'
import { ref, reactive } from 'vue'
import { QuillEditor } from '@vueup/vue-quill'
import axios from 'axios'

export const useArticleStore = defineStore('articlestore', {})

export const useAuthStore = defineStore('authstore', {})

export const useEditorStore = defineStore('editorStore', () => {
    const editorContent = ref('')
    const title = ref('')
    const isLoading = ref(false)
    const errorMessage = ref('')
    const isError = ref(false)

    const getEditorContent = () => {
        console.log('Editor Content:', editorContent.value)
    }

    const submitPost = async () => {
        try {
            isLoading.value = true
            let data = {
                title: title.value,
                post: JSON.stringify(editorContent.value)
            }

            let response = await axios.post('/api/post-article', data)
            console.log(response.data)
        } catch (error) {
            isLoading.value = false
            isError.value = true

            if(error.response){
             console.log(error)

             errorMessage.value = error.response.data.error
            }else{
                errorMessage.value = 'an unexpected error occured'
            }
        
        } finally {
            isLoading.value = false
        }
    }

    const editorOptions = reactive({
        // debug: 'info',
        placeholder: 'Type your post...',
        modules: {
            toolbar: [
                [{ header: [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [
                    { list: 'ordered' },
                    { list: 'bullet' },
                    { indent: '-1' },
                    { indent: '+1' }
                ],
                ['link', 'image', 'video'],
                ['clean']
            ]
        }
    })

    return {
        editorContent,
        getEditorContent,
        editorOptions,
        title,
        submitPost,
        isLoading,
        errorMessage,
        isError
    }
})
