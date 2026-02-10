<script setup>
import { ref } from 'vue';

const username = ref("")
const password = ref("")
const errorMessage = ref('')

const login = async () => {
    try {
        const res = await axios.post('http:localhost:5173', {
            username: username.value,
            password: password.value
        }, {
            withCredentials: true
        })
        console.log(res.data)
        window.location.href = '/'
    } catch(e) {
        if (e.response) {
            errorMessage.value = err.response.data.message
        }
        console.log(errorMessage.value)
        console.log('error bro')

    }
}
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-[#061E29]">
        <div 
            class="bg-[#a7d6d8] w-100 h-70 rounded-[20px] py-8 px-8 flex flex-col justify-between"
        >
            <span 
                class="text-[24px] font-bold"
            >
                Login
            </span>
            <div class="flex flex-col h-[50%] justify-around">
                <div
                    class="bg-white h-9 py-1 px-2 rounded-lg focus:outline focus:outline-sky-500 flex items-center"
                >
                    <i class="pi pi-user mr-2" style="color: gray;"></i>
                    <input 
                        type="text"
                        v-model="username"
                        placeholder="Username"
                        class="w-full h-full focus:outline-none"
                    >
                </div>
                <div
                    class="bg-white h-9 py-1 px-2 rounded-lg focus:outline focus:outline-sky-500 flex items-center"
                >
                    <i class="pi pi-lock mr-2" style="color: gray;"></i>
                    <input 
                        type="password"
                        v-model="password"
                        placeholder="Password"
                        class="w-full h-full focus:outline-none"
                    >
                </div>
            </div>
            <div
                class="flex justify-center items-center"
            >
                <div
                    class="bg-[#1D546D] w-[50%] rounded-lg text-white font-bold text-center px-1 py-2 cursor-pointer hover:bg-[#38677c] transition-colors"
                    @click="login()"
                >
                    Login
                </div>
            </div>
        </div>
    </div>
</template>