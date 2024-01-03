
<div class="section-page-custom flex">
    <div class="page-custom-image" style="background-image: url(https://nurui.fueko.net/content/images/2018/12/alisher-sharip-117976-unsplash.jpg)">
    </div>
    <div class="page-custom-wrap">
        <div class="page-custom-header">
            <a wire:navigate href="{{ route('index') }}">Back to Homepage</a>
        </div>
        <div class="page-custom-content flex">
            <div class="subscribe-wrap">
                <form data-members-form="signin" class="subscribe-form">
                    <h3>Welcome back!</h3>
                    <div id="ityped" class="ityped">
                        <span class="ityped-wrap">Sign in to your account</span>
                    </div>
                    <div class="form-group">
                        <input data-members-email class="subscribe-input" placeholder="Your email address" type="email" aria-label="Your email address" required>
                    </div>
                    <button type="submit" class="global-button">Send login link</button>
                </form>
                <small>Don&#x27;t have an account yet? <a href="https://nurui.fueko.net/signup/">Sign up</a></small>
                <p class="subscribe-alert-loading">Processing your application</p>
                <p class="subscribe-alert-error">There was an error sending the email, please try again</p>
                <div class="subscribe-success">
                    <h3>Great!</h3>
                    Check your inbox and click the link to complete signin
                    <br>
                    <a href="https://nurui.fueko.net" class="global-button">Back to Homepage</a>
                </div>
            </div>
        </div>
        <div class="page-custom-footer">
            <a href="https://nurui.fueko.net">Nurui.</a>
            <span>Thoughts, stories and ideas</span>
        </div>
    </div>
</div>
