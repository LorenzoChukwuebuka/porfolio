import { defineStore } from 'pinia'
import { ref, reactive, onMounted } from 'vue'
import { QuillEditor } from '@vueup/vue-quill'
import axios from 'axios'

export const useAuthStore = defineStore('authstore', () => {
    const formValues = ref({ email: '', password: '' })
    const isLoading = ref(false)
    const isError = ref(false)
    const formError = ref(false)
    const emailInvalid = ref(false)
    const errorMessage = ref('')

    const isMailValid = email => {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
        emailInvalid.value = !emailRegex.test(email)
    }

    const loginUser = async () => {
        if (
            formValues.value.email.trim() === '' ||
            formValues.value.password.trim() === ''
        ) {
            errorMessage.value = 'Invalid Email/Password'
            formError.value = true
        }

        try {
            
        } catch (error) {
            console.log(error)
        }
    }

    return {
        formValues,
        isLoading,
        isError,
        formError,
        emailInvalid,
        errorMessage,
        loginUser,
        isMailValid
    }
})

export const useEditorStore = defineStore('editorStore', () => {
    const editorContent = ref('')
    const title = ref('')
    const isLoading = ref(false)
    const errorMessage = ref('')
    const isError = ref(false)
    const isSuccess = ref(false)
    const successMessage = ref('')
    const articles = ref([])
    const article = ref(null)
    const page = ref(1)

    const getEditorContent = () => {
        console.log('Editor Content:', editorContent.value)
    }

    const submitPost = async () => {
        try {
            isLoading.value = true
            let data = {
                title: title.value,
                post: editorContent.value
            }

            let response = await axios.post('/api/post-article', data)
            isSuccess.value = true
            successMessage.value = response.data.message
        } catch (error) {
            isLoading.value = false
            isError.value = true

            if (error.response) {
                console.log(error)

                errorMessage.value = error.response.data.error
            } else {
                errorMessage.value = 'an unexpected error occured'
            }
        } finally {
            isLoading.value = false
        }
    }

    const formatDate = dateString => {
        const date = new Date(dateString)
        const options = { month: 'long', day: 'numeric', year: 'numeric' }
        return date.toLocaleDateString('en-US', options)
    }

    const handlePageChange = direction => {
        const newPage = page.value + direction
        if (newPage >= 1) {
            page.value = newPage
            getArticles()
        }
    }

    const getArticles = async () => {
        try {
            let response = await axios.get(
                `/api/get-article?page=${page.value}`
            )
            articles.value = response.data.payload.data
        } catch (error) {
            console.log(error)
        }
    }

    const getArticle = async id => {
        try {
            let response = await axios.get('/api/get-post/' + id)
            article.value = response.data.payload
            console.log(article.value)
        } catch (error) {
            console.log(error)
        }
    }

    function generateSlug (title) {
        // Convert title to lowercase and replace spaces with dashes
        let slug = title.toLowerCase().replace(/\s+/g, '-')

        // Remove special characters
        slug = slug.replace(/[^\w-]/g, '')

        // Trim dashes from the beginning and end of the slug
        slug = slug.replace(/^-+|-+$/g, '')

        return slug
    }

    onMounted(() => {
        getArticles()
    })

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
        isError,
        isSuccess,
        successMessage,
        articles,
        getArticles,
        formatDate,
        generateSlug,
        getArticle,
        article,
        handlePageChange
    }
})
