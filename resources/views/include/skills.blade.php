<style>
	.progress_br {
      border: 1px solid #eeeeee;
      padding: 5px;
      border-radius: 10px;
	}

	.progress {
      height: 10px;
      border-radius: 10px;
      background: #e8e8e8;
	}

	.progress-bar {
      transition: width .6s ease;
      height: 10px;
      border-radius: 5px;
      vertical-align: middle;
      align-self: center;
      background-image: -moz-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
      background-image: -webkit-linear-gradient(0deg, #766dff 0%, #88f3ff 100%);
	}
</style>

<section class="ftco-section bg-light" id="skills-section" style="padding: 4em 0">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="">My Skills</h2>
			</div>
		</div>
		<div class="row">
			@foreach ($skills as $skill)
				<div class="col-md-6 animate-box">
					<div class="progress-wrap ftco-animate">
						<h3>{{$skill['name']}}</h3>
						<div class="progress_br">
							<div class="progress">
								<div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill['value']}}"
								     aria-valuemin="0" aria-valuemax="100" style="width:{{$skill['value']}}%">
									<span>{{$skill['value']}}%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>

	</div>
</section>
