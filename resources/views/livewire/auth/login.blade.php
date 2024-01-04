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

                <small>Or login through social</small>
                <p>
                    <a class="facebook" href="#" rel="noopener">
                        <svg width="30px" class="global-svg" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/>
                        </svg>
                    </a>
                    <a class="google" href="{{ route('auth.google') }}" rel="noopener">
                        <svg width="30px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                    </a>
                </p>
                <p class="subscribe-alert-error">There was an error sending the email, please try again</p>
            </div>

        </div>
        <div class="page-custom-footer">
            <a href="https://nurui.fueko.net">Datefession.</a>
            <span>Thoughts, stories and ideas</span>
        </div>
    </div>
</div>
