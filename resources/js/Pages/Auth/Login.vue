<template>
  <Head title="Log in" />


    <!-- <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
    </div>

    <form @submit.prevent="submit">
        <div>
            <BreezeLabel for="email" value="Email" />
            <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <BreezeLabel for="password" value="Password" />
            <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label class="flex items-center">
                <BreezeCheckbox name="remember" v-model:checked="form.remember" />
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                Forgot your password?
            </Link>

            <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Log in
            </BreezeButton>
        </div>
    </form> -->
  <div>
    <div class="login-header box-shadow">
      <div
        class="container-fluid d-flex justify-content-between align-items-center"
      >
        <div class="brand-logo mt-1">
          <a class="text-dark" href="login.html"> DIUSmS </a>
        </div>
        <div class="login-menu mt-1">
          <ul>
            <li><a :href="route('register')">Register</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div
      class="
        login-wrap
        d-flex
        align-items-center
        flex-wrap
        justify-content-center
      "
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-7">
            <img src="assets/vendors/images/login-page-img.png" alt="" />
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="login-box bg-white box-shadow border-radius-10">
              <div class="login-title">
                <h2 class="text-center text-primary">Login To DIUSmS</h2>
              </div>
                <BreezeValidationErrors class="mb-4" />
              <form @submit.prevent="submit">
                <div class="select-role">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn active">
                      <input type="radio" name="options" id="admin" />
                      <div class="icon">
                        <img
                          src="assets/vendors/images/briefcase.svg"
                          class="svg"
                          alt=""
                        />
                      </div>
                      <span>I'm</span>
                      Manager
                    </label>
                    <label class="btn">
                      <input type="radio" name="options" id="user" />
                      <div class="icon">
                        <img
                          src="assets/vendors/images/person.svg"
                          class="svg"
                          alt=""
                        />
                      </div>
                      <span>I'm</span>
                      Employee
                    </label>
                  </div>
                </div>
                <div class="input-group custom">
                  <input
                    class="form-control form-control-lg"
                    placeholder="Username" id="email" type="email" v-model="form.email" required autofocus autocomplete="username"
                  />
                  <div class="input-group-append custom">
                    <span class="input-group-text"
                      ><i class="icon-copy dw dw-user1"></i
                    ></span>
                  </div>
                </div>
                <div class="input-group custom">
                  <input
                    type="password"
                    class="form-control form-control-lg"
                    placeholder="**********" id="password" v-model="form.password" required autocomplete="current-password"
                  />
                  <div class="input-group-append custom">
                    <span class="input-group-text"
                      ><i class="dw dw-padlock1"></i
                    ></span>
                  </div>
                </div>
                <div class="row pb-30">
                  <div class="col-6">
                    <div class="">
                      <BreezeCheckbox name="remember" v-model:checked="form.remember" />
                      <label class="ml-2" for="customCheck1"
                        >Remember</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="forgot-password">
                      <a v-if="canResetPassword" :href="route('password.request')">Forgot Password</a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group mb-0">
                      
											<!-- use code for form submit -->
											<!-- <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In"> -->
										
                      <BreezeButton class="btn bg-primary btn-primary btn-lg btn-block" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                      Log in
                      </BreezeButton>

                      <!-- <a
                        class="btn btn-primary btn-lg btn-block"
                        href="index.html"
                        >Sign In</a
                      > -->
                    </div>
                    <div
                      class="font-16 weight-600 pt-10 pb-10 text-center"
                      data-color="#707373"
                    >
                      OR
                    </div>
                    <div class="input-group mb-0">
                      <a :href="route('register')"
                        class="btn btn-outline-primary btn-lg btn-block"
                        >Register To Create Account</a
                      >
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import BreezeButton from '@/Components/Button.vue'
import BreezeCheckbox from '@/Components/Checkbox.vue'
// import BreezeGuestLayout from '@/Layouts/Guest.vue'
import BreezeInput from '@/Components/Input.vue'
import BreezeLabel from '@/Components/Label.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    // layout: BreezeGuestLayout,

    components: {
        BreezeButton,
        BreezeCheckbox,
        BreezeInput,
        BreezeLabel,
        BreezeValidationErrors,
        Head,
        Link,
    },

    props: {
        canResetPassword: Boolean,
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('login'), {
                onFinish: () => this.form.reset('password'),
            })
        }
    }
}
</script>

