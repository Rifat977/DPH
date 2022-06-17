<template>
  <Head title="Teacher" />
  <Master>
    <div class="min-height-200px">
      <div class="page-header">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="title">
              <h4>Teacher</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Teacher
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>

      <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-10">
          <div class="pull-left">
            <h4 class="text-blue h4">Teacher data</h4>
          </div>
          <div class="pull-right">
            <Link class="btn btn-primary" href="#" role="button">
                Create Teacher
              </Link>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Tag</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><span class="badge badge-primary">Primary</span></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td><span class="badge badge-secondary">Secondary</span></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td><span class="badge badge-success">Success</span></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td><span class="badge badge-secondary">Secondary</span></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td><span class="badge badge-success">Success</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="collapse collapse-box" id="responsive-table">
          <div class="code-box">
            <div class="clearfix">
              <a
                href="javascript:;"
                class="btn btn-primary btn-sm code-copy pull-left"
                data-clipboard-target="#responsive-table-code"
                ><i class="fa fa-clipboard"></i> Copy Code</a
              >
              <a
                href="#responsive-table"
                class="btn btn-primary btn-sm pull-right"
                rel="content-y"
                data-toggle="collapse"
                role="button"
                ><i class="fa fa-eye-slash"></i> Hide Code</a
              >
            </div>
            <pre><code class="xml copy-pre" id="responsive-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	    </tr>
	  </tbody>
	</table>
</div>
							</code></pre>
          </div>
        </div>
      </div>

      <!-- <div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-blue h4">Step wizard</h4>
						<p class="mb-30">jQuery Step wizard</p>
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard">
							<h5>Personal Info</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >First Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Last Name :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Email Address :</label>
											<input type="email" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone Number :</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Select City :</label>
											<select class="custom-select form-control">
												<option value="">Select City</option>
												<option value="Amsterdam">India</option>
												<option value="Berlin">UK</option>
												<option value="Frankfurt">US</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Date of Birth :</label>
											<input type="text" class="form-control date-picker" placeholder="Select Date">
										</div>
									</div>
								</div>
							</section>
						</form>
					</div>
				</div> -->
    </div>
  </Master>
</template>

<style scoped>
</style>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Master from "@/Layouts/App.vue";

export default {
  components: {
    Head,
    Link,
    Master,
  },
};
</script>
