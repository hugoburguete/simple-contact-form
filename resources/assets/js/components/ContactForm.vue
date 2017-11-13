<template>
	<form class="form" v-on:submit.prevent>
		<div class="form-group">
			<label for="name">Name:</label>
			<input class="form-control" type="text" v-model="form.name" name="name" id="name">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input class="form-control" type="text" v-model="form.email" name="email" id="email">
		</div>
		<div class="form-group">
			<label for="message">Message:</label>
			<textarea class="form-control" v-model="form.message" name="message" id="message"></textarea>
		</div>
		<input v-show="submitStatus == 'IDLE' || submitStatus == 'ERROR'"
			type="submit" 
			class="btn btn-primary" 
			value="Submit" 
			@click="submitForm()">
		<div class="alert alert-success" v-show="submitStatus == 'SUCCESS'">Success. We will shortly contact you.</div>
		<div class="alert alert-warning" v-show="submitStatus == 'ERROR'">Invalid Submission.</div>
		<div class="alert alert-danger" v-show="submitStatus == 'FAIL'">The form suffered a disastrous failure. Please contact Hugo for more details.</div>
		<ul v-show="hasErrors">
			<li v-for="(error, key) in errors">{{ key }}
				<ul v-for="err in error">
					<li>{{ err }}</li>
				</ul>
			</li>
		</ul>
	</form>
</template>
<script>
	export default {
		data: () => {
			return {
				form: {
					name: '',
					email: '',
					message: '',
				},
				submitStatus: 'IDLE',
				errors: {},
			}
		},
		mounted() {

		},
		methods: {
			submitForm() {
				let self = this;
				this.errors = {};
				this.submitStatus = 'IDLE';
				let success = (response) => {
					self.submitStatus = response.data.success === true ? 'SUCCESS' : 'FAIL';
				};
				let failure = (error) => {
					if (error.response.status == 422) {
						self.submitStatus = 'ERROR';
						self.errors = error.response.data.errors;
					}
					else {
						self.submitStatus = 'FAIL';
					}
				};
				window.axios.post('/admin/contact-message', this.form)
				  .then(success)
				  .catch(failure);
			}
		},
		computed: {
			hasErrors() {
				return !_.isEmpty(this.errors);
			}
		}
	}
</script>