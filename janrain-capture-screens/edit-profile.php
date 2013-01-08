<script type="text/javascript">
//set the flow name for this screen here
janrain.settings.capture.flowName = 'plugins';
janrain.settings.capture.screenToRender = 'editProfile';

function janrainCaptureWidgetOnLoad() {
    janrain.capture.ui.start();
    janrain.capture.ui.createCaptureSession(access_token);
}
</script>
<style>#field-janrain-capture-uuid-add-more-wrapper {display:none;}</style>
<div id="janrain-edit-wrapper" class="profile">
<dt>Profile</dt>
<div style="display:none;" id="editProfile">
  <div class="grid-block">
      <div class="col125">
        <h3>Profile Photo</h3>
        <div class="contentBoxWhiteShadow clearfix">
            {* photoManager *}
        </div>
        <h3>Linked Accounts</h3>
        <div class="contentBoxWhiteShadow clearfix">
            {* edit_linkedAccounts *}
            {* linkAccountContainer *}
                <div class="capture_header">
                    <h1>Link your accounts</h1>
                </div>
                <h2>Allows you to sign in to your account using that provider in the future.</h2>
                <div class="capture_signin">
                    {* loginWidget *}
                </div>
            {* /linkAccountContainer *}
        </div>
        <!-- Only show this if it was from a traditional login !-->
        <h3 class="janrain_traditional_account_only">Password</h3>
        <div class="janrain_traditional_account_only contentBoxWhiteShadow capture_profile_section">
            <a href="#" data-capturescreen="changePassword">Change Password</a>
        </div>
      </div>
      
      <div class="col250">
        <h3>Account Info</h3>
            {* editProfileForm *}
                <div class="capture_editCol">
                    {* edit_displayName *}
                    {* edit_profileBlurb *}
                    {* edit_name *}
                    {* edit_email *}
                    {* edit_phone *}
                    {* edit_location *}
                    {* addressDrop *}
                    {* edit_gender *}
                    {* edit_birthdate *}
                    <div class="capture_form_item">
                    {* submitButton *}
                    {* savedProfileMessage *}
                    </div>
                </div>
            {* /editProfileForm *}
    </div>
  </div>
</div>

<div style="display:none;" id="changePassword">
    <div class="capture_header">
        <h1>Change password</h1>
    </div>
    {* newPasswordForm *}
        {* oldpassword *}
        {* newpassword *}
        {* newpasswordConfirm *}
        <div class="capture_footer">
            {* saveButton *}
        </div>
    {* /newPasswordForm *}
</div>

<div style="display:none;" id="changePasswordSuccess">
    <div class="capture_header">
        <h1>You did it!</h1>
    </div>
      <p>Your password has been successfully changed.</p>
    <div class="capture_footer">
        <a href="#" class="capture_btn capture_secondary">Close</a>
    </div>
</div>

<div style="display:none;" id="addLinkedAccount">
        <div class="capture_header">
            <h1>Link another account</h1>
        </div>
        <h3>Link any of these providers with your account.<br />Allows you to sign in to your {* siteName *} account using that provider in the future.</h3>
        {* loginWidget *}
</div>
<div id="janrainEngageEmbed"  style="display:none;"></div>
</div>