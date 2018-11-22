<div class="newsletter-section spad" id="newsletter">
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                                <li id="errorNewsletter">{{ $error }}</li>
                        @endforeach
                </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" method="post" action="/news" >
                    @csrf
                    <input type="text" placeholder="Your e-mail here" name="email">
                    <button class="site-btn btn-2" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>