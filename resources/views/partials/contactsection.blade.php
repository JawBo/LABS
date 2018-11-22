<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
					<p class="con-item">0034 37483 2445 322</p>
					<p class="con-item">hello@company.com</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
						@if ($errors->any())
						<div class="alert alert-danger">
								<ul>
										@foreach ($errors->all() as $error)
												<li id="errorContact">{{ $error }}</li>
										@endforeach
								</ul>
						</div>
						@endif
					<form class="form-class" id="con_form" method="post" action="/mail">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input value="{{old('name')}}" type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input value="{{old('email')}}" type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input value="{{old('subject')}}" type="text" name="subject" placeholder="Subject">
								<textarea value="{{old('msg')}}" name="msg" placeholder="Message"></textarea>
								<button class="site-btn" type="submit" >Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>