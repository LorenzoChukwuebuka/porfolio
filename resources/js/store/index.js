import { defineStore } from 'pinia'
import { ref, reactive } from 'vue'
import { QuillEditor } from '@vueup/vue-quill'

export const useArticleStore = defineStore('articlestore', {})

export const useAuthStore = defineStore('authstore', {})

export const useEditorStore = defineStore('editorStore', () => {
    const editorContent = ref('')
    const title = ref('')

    const getEditorContent = () => {


        console.log('Editor Content:', editorContent.value)
 
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
        title
    }
})
