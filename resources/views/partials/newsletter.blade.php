<div class="newsletter-section spad" id="newsletter">
    <div class="container">
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