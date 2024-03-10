<template>
    <div class="container-lg">
        <div class="row m-3 m-md-5 bg-white shadow-lg" style="border-radius: 50px;">
            <div class="col-md-6 p-3 p-md-5 mt-5">
                <img :src="'../assets/images/Img-SkillJet.png'" alt="img" style="max-width: 100%;">
            </div>
            <div class="col-md-6 p-3 p-md-5" style="border: 20px;">
                <div class="mb-5">
                    <div class="d-flex justify-content-end">
                        <a href="/">
                            <img :src="'../assets/images/Logout.png'" 
                                alt="img"  
                                style="width:35px;">
                        </a>
                    </div>
                    <h2>Buat Akun</h2>
                </div>
                <form class="pe-4 ps-4" @submit.prevent="submitForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input v-model="email"
                               type="email" 
                               class="form-control" 
                               id="email" 
                               aria-describedby="email"
                               placeholder="masukkan email anda disini"
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Password</label>
                        <input v-model="password"
                               type="password" 
                               class="form-control" 
                               id="password"
                               placeholder="masukkan password anda disini"
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password1" class="form-label">Confirm Password</label>
                        <input type="password" 
                               class="form-control" 
                               id="confirm-password"
                               placeholder="masukkan password anda disini"
                               required>
                    </div>
                    <div class="d-grid mt-5 mb-2 gap-2 mx-auto">
                        <button type="submit" class="btn btn-submit border-dark btn-royalpurple">Submit</button>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <hr class="solid">
                        </div>
                        <div class="col-2">
                            <span class="d-flex justify-content-center">atau</span>
                        </div>
                        <div class="col">
                            <hr class="solid">
                        </div>
                    </div>
                    <div class="d-grid mt-2 gap-2 mx-auto">
                        <a type="button" 
                           class="link-offset-2 
                                  link-underline 
                                  link-underline-opacity-0 
                                  btn-google 
                                  mx-auto 
                                  gap-5">
                            <i class="fa-brands fa-google"></i>
                            <span class="ms-3">Masuk dengan Google</span>
                        </a>
                    </div>
                    <div class="mt-5 d-flex justify-content-center">
                        <span class="me-2">Sudah punya Akun?</span>
                        <a class="link-offset-2 link-underline link-underline-opacity-0" href="/login">
                            <span class="forgot-password" for="forgot-password">
                                <strong>
                                    Login
                                </strong>  
                            </span>
                        </a>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            email: '',
            password: '',
        }
    },
    methods: {
        async submitForm() {
            const formData = {
                email: this.email,
                password: this.password,
            };

            try {
                const respone = await axios.post('http//127.0.0.1:8000/api/submit', formData);
                console.log(respone.data);
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>

<style>
    .forgot-password {
        color: black;
        font-size: 15px;
    }

    .btn-submit{
        color: white;
    }

    .btn-google{
        color: black;
    }

    hr.solid {
        border-top: 3px solid #bbb;
    }
</style>