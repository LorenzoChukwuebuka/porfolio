import { defineStore } from 'pinia'
import { ref, reactive, onMounted } from 'vue'
import { QuillEditor } from '@vueup/vue-quill'
import axios from 'axios'
import { useRouter } from 'vue-router'

export const useAuthStore = defineStore('authstore', () => {
    const formValues = ref({ email: '', password: '' })
    const isLoading = ref(false)
    const isError = ref(false)
    const formError = ref(false)
    const emailInvalid = ref(false)
    const errorMessage = ref('')
    const route = useRouter()

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
            isLoading.value = true
            let response = await axios.post('/api/login', formValues.value)
            localStorage.setItem('admin', response.data.payload.token)
            route.push('/next/admin-dash')
        } catch (error) {
            isLoading.value = false
            isError.value = true
            console.log(error)
            if (error.response) {
                errorMessage.value = error.response.data.error
            } else {
                errorMessage.value = 'an unexpected error occurred'
            }
        } finally {
            isLoading.value = false
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
    const view = ref(1)
    const articleFile = ref(null)
    const currentArticle = ref(null)

    const getEditorContent = () => {
        console.log('Editor Content:', editorContent.value)
    }

    const submitPost = async () => {
        try {
            isLoading.value = true

            let formData = new FormData()
            formData.append('title', title.value)
            formData.append('post', editorContent.value)
            formData.append('file', articleFile.value)

            let response = await axios.post('/api/post-article', formData)
            isSuccess.value = true
            successMessage.value = response.data.message
            //  window.location.reload()
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
            isLoading.value = true
            let response = await axios.get(
                `/api/get-article?page=${page.value}`
            )
            articles.value = response.data.payload.data
        } catch (error) {
            console.log(error)
        } finally {
            isLoading.value = false
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

    const increaseView = async postId => {
        try {
            let response = await axios.put('/api/update-view/' + postId)
            console.log(response.data)
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

    const updateArticle = async id => {
        try {
            isLoading.value = true

            let formData = new FormData()
            formData.append('title', title.value)
            formData.append('post', editorContent.value)
            // formData.append('_method', 'PUT') // For Laravel's form method spoofing

            if (articleFile.value) {
                formData.append('file', articleFile.value)
            }

            // Use the provided id or the currentArticle id
            const articleId = id || currentArticle.value?.id

            let response = await axios.put(
                `/api/update-article/${articleId}`,
                formData
            )

            isSuccess.value = true
            successMessage.value =
                response.data.message || 'Article updated successfully'

            // Refresh the articles list
            getArticles()
        } catch (error) {
            console.error(error)
            isError.value = true
            errorMessage.value =
                error.response?.data?.error || 'Failed to update article'
        } finally {
            isLoading.value = false
        }
    }

    const deleteArticle = async id => {
        try {
            isLoading.value = true

            // Use the provided id or the currentArticle id
            const articleId = id || currentArticle.value?.id

            let response = await axios.delete(
                `/api/delete-article/${articleId}`
            )

            isSuccess.value = true
            successMessage.value =
                response.data.message || 'Article deleted successfully'

            // Refresh the articles list
            getArticles()
        } catch (error) {
            console.error(error)
            isError.value = true
            errorMessage.value =
                error.response?.data?.error || 'Failed to delete article'
        } finally {
            isLoading.value = false
        }
    }

    // Function to set the current article for editing or deleting
    const setCurrentArticle = articleData => {
        currentArticle.value = articleData
        if (articleData) {
            title.value = articleData.title || ''
            editorContent.value = articleData.content || ''
        }
    }

    onMounted(() => {
        getArticles()
    })

    const editorOptions = reactive({
        placeholder: 'Type your post...',
        theme: 'snow',
        modules: {
            toolbar: [
                [{ header: [1, 2, 3, 4, 5, 6, false] }],
                [{ font: [] }],
                [{ size: [] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ color: [] }, { background: [] }],
                [{ script: 'sub' }, { script: 'super' }],
                ['blockquote', 'code-block'],
                [
                    { list: 'ordered' },
                    { list: 'bullet' },
                    { indent: '-1' },
                    { indent: '+1' }
                ],
                [{ direction: 'rtl' }],
                [{ align: [] }],
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
        handlePageChange,
        increaseView,
        articleFile,
        updateArticle,
        deleteArticle,
        currentArticle,
        setCurrentArticle
    }
})
