<template>
  <Head title="Log in" />

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
            <li><Link :href="route('register')">Register</Link></li>
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
              <form>
                <div class="select-role">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn active">
                      <input type="radio" name="options" id="student" />
                      <div class="icon">
                        <img
                          src="assets/vendors/images/person.svg"
                          class="svg"
                          alt=""
                        />
                      </div>
                      <span>I'm</span>
                      Student
                    </label>
                    <label class="btn">
                      <input type="radio" name="options" id="teacher" />
                      <div class="icon">
                        <img
                          src="assets/vendors/images/person.svg"
                          class="svg"
                          alt=""
                        />
                      </div>
                      <span>I'm</span>
                      Teacher
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
                      <Link v-if="canResetPassword" :href="route('password.request')">Forgot Password</Link>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group mb-0">
                      
											<!-- use code for form submit -->
											<!-- <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In"> -->
										
                      <Button v-on:click="submit" class="btn bg-primary btn-primary btn-lg btn-block" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                      Log in
                      </Button>

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
                      <Link :href="route('register')"
                        class="btn btn-outline-primary btn-lg btn-block"
                        >Register To Create Account</Link>
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

