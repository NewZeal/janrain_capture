<script type="text/javascript">
// set the flow name for this screen here
janrain.settings.capture.flowName = 'plugins';

// call our code/token exchanger, and use the token to set up a capture session
function getTokenForCode(code, redirect_uri) {
	  var url;
		url = janrain.settings.capture.redirectUri;
		url += "?code=" + code;
		window.location.href = url;
}
function janrainCaptureWidgetOnLoad() {
    function handleCaptureLogin(result) {

        console.log ("exchanging code for token...");
        getTokenForCode(result.authorizationCode, janrain.settings.capture.redirectUri);
    }
    janrain.events.onCaptureSessionFound.addHandler(function(result){
	    console.log ("capture session found");
	    janrainSignOut();
    });

    janrain.events.onCaptureSessionNotFound.addHandler(function(result){
	    //console.log ("capture session not found");
    });

    janrain.events.onCaptureLoginSuccess.addHandler(handleCaptureLogin);
    janrain.events.onCaptureRegistrationSuccess.addHandler(handleCaptureLogin);

    janrain.capture.ui.start();
}
</script>
<div style="display:none;" id="signIn">
    <div class="capture_header">
        <h1>Sign Up / Sign In</h1>
    </div>
    <div class="capture_signin">
        <h2>With your existing account from...</h2>
        {* loginWidget *} <br />
    </div>
    <div class="capture_backgroundColor">
        <div class="capture_signin">
            <h2>With a traditional account...</h2>
                {* #userInformationForm *}
                    {* traditionalSignIn_emailAddress *}
                    {* traditionalSignIn_password *}
                    <div class="capture_rightText">
                        {* traditionalSignIn_signInButton *}{* traditionalSignIn_createButton *}
                    </div>
                {* /userInformationForm *}
        </div>
    </div>
</div>

<div style="display:none;" id="returnSocial">
    <div class="capture_header">
        <h1>Sign Up / Sign In</h1>
    </div>
    <div class="capture_signin">
        <h2>Welcome Back, {* welcomeName *}</h2>
        {* loginWidget *}
        <div class="capture_centerText switchLink"><a href="#" data-cancelcapturereturnexperience="true">Use another account</a></div>
    </div>
</div>
<div style="display:none;" id="returnTraditional">
    <div class="capture_header">
        <h1>Sign Up / Sign In</h1>
    </div>
    <h2 class="capture_centerText">Welcome back<span id="displayNameData"></span>!</h2>
        <div id="userPhoto" class="inline">
        </div>
        <div class="inline">
            <span id="displayNameData">{* welcomeName *}</span>
        </div>
            <div class="capture_backgroundColor">
                <div class="capture_signin">
                {* #userInformationForm *}
                    {* traditionalSignIn_emailAddress *}
                    {* traditionalSignIn_password *}
                    <div class="capture_form_item capture_rightText">
                        {* traditionalSignIn_signInButton *}
                    </div>
                {* /userInformationForm *}
            </div>
        <div class="capture_centerText switchLink"><a href="#" data-cancelcapturereturnexperience="true">Use another account</a></div>
    </div>
</div>
<div style="display:none;" id="socialRegistration" class="capture_lrg_footer">
    <div class="capture_header">
        <h1>Almost Done!</h1>
    </div>
      <h2>Please confirm the information below before signing in.</h2>
        {* #socialRegistrationForm *}
            {* socialRegistration_emailAddress *}
            {* socialRegistration_displayName *}
            {* socialRegistration_ageVerification *}
            By clicking "Create Account", you confirm that you accept our
                <a href="#">terms of service</a> and have read and understand
                <a href="#">privacy policy</a>.
            <div class="capture_footer">
                <div class="capture_left">
                    {* backButton *}
                </div>
                <div class="capture_right">
                {* socialRegistration_signInButton *}
                </div>
            </div>
        {* /socialRegistrationForm *}
</div>
<div style="display:none;" id="traditionalRegistration">
    <div class="capture_header">
        <h1>Almost Done!</h1>
    </div>
        {* #registrationForm *}
            {* traditionalRegistration_emailAddress *}
            {* traditionalRegistration_password *}
            {* traditionalRegistration_passwordConfirm *}
            {* traditionalRegistration_displayName *}
            {* traditionalRegistration_captcha *}
            {* traditionalRegistration_ageVerification *}
            By clicking "Create Account", you confirm that you accept our
                <a href="#">terms of service</a> and have read and understand
                <a href="#">privacy policy</a>.
            <div class="capture_footer">
                <div class="capture_left">
                    {* backButton *}
                </div>
                <div class="capture_right">
                {* createAccountButton *}
                </div>
            </div>
        {* /registrationForm *}
</div>
<div style="display:none;" id="forgotPassword">
    <div class="capture_header">
        <h1>Create a new password</h1>
    </div>
    <h2>Don't worry, it happens. We'll send you a link to create a new password.</h2>
    {* #forgotPasswordForm *}
        {* traditionalSignIn_emailAddress *}
        <div class="capture_footer">
            <div class="capture_left">
                {* backButton *}
            </div>
            <div class="capture_right">
                {* forgotPassword_sendButton *}
            </div>
        </div>
    {* /forgotPasswordForm *}
</div>
<div style="display:none;" id="forgotPasswordSuccess">
    <div class="capture_header">
        <h1>Create a new password</h1>
    </div>
      <p>We've sent an email with instructions to create a new password. Your existing password has not been changed.</p>
    <div class="capture_footer">
        <a href="#" onclick="janrain.capture.ui.modal.close()" class="capture_btn capture_primary">Close</a>
    </div>
</div>
<div style="display:none;" id="mergeAccounts">
    {* mergeAccounts *}
</div>
<div style="display:none;" id="traditionalAuthenticateMerge">
    <div class="capture_header">
        {* backButton *}
        <h1>Sign in to complete account merge</h1>
    </div>
    <div class="capture_signin">
    {* #tradAuthenticateMergeForm *}
        {* traditionalSignIn_emailAddress *}
        {* mergePassword *}
        <div class="capture_footer">
            <div class="capture_form_item capture_rightText">
                {* traditionalSignIn_signInButton *}
            </div>
        </div>
     {* /tradAuthenticateMergeForm *}
    </div>
</div>