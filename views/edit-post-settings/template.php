<div class="wrap">
    <h2>Recaptcha Settings</h2>
    <table class="form-table">
            <tr valign="top">
                <th colspan="2" scope="row">
                    <span style="color:red; font-weight:bold;"></span>
                </th>
            </tr>
        <tr valign="top">
            <th colspan="2" scope="row">
                If you don't have these keys yet go to <a href="https://www.google.com/recaptcha/" target="_blank">https://www.google.com/recaptcha/</a> to obtain keys.
                <br><br>
                If the Recaptcha isn't showing up try a different placement.  Also, some other comment plugins (such as Jetpack comments) interfere with this plugin and they will not work together.
            </th>
        </tr>
        <tr valign="top">
            <th scope="row">
                <form method="POST" action="">
                    <input type="hidden" name="update_herc_recaptcha_settings" value="Y" />
                    <label for="herc_recaptcha_options[public_key]">
                        Site Key
                    </label>
            </th>
            <td>
                <input type="text" name="herc_recaptcha_options[public_key]" size="25" value="" />
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">
                <label for="herc_recaptcha_options[private_key]">
                    Secret Key
                </label>
            </th>
            <td>
                <input type="text" name="herc_recaptcha_options[private_key]" size="25" value="" />
            </td>
        </tr>
        <tr valign="top">
            <th colspan="2" scope="row">
                <h3>
                    Comment Form
                </h3>
            </th>
        </tr>
        <tr valign="top">
            <th scope="row">
                <label for="herc_recaptcha_options[registration_form]">
                    Show on Comment Form
                </label>
            </th>
            <td>
                <input type="hidden" name="herc_recaptcha_options[comment_form]" value="false" />
                <input type="checkbox" name="herc_recaptcha_options[comment_form]" value="true"  />
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">
                <label for="herc_recaptcha_options[placement]">
                    Location:
                </label>
            </th>
            <td>
                <select name="herc_recaptcha_options[placement]">
                    <option value="" >what up</option>
                </select>
            </td>
        </tr>
        <tr valign="top">
            <th colspan="2" scope="row">
                <h3>
                    Registration Form
                </h3>
            </th>
        </tr>
        <tr valign="top">
            <th scope="row">
                <label for="herc_recaptcha_options[registration_form]">
                    Show on Registration Form
                </label>
            </th>
            <td>
                <input type="hidden" name="herc_recaptcha_options[registration_form]" value="false" />
                <input type="checkbox" name="herc_recaptcha_options[registration_form]" value="true" />
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">
                <label for="herc_recaptcha_options[placement]">
                    Style:
                </label>
            </th>
            <td>
                <select name="herc_recaptcha_options[style]">
                    <option value="hi there">hey hey!</option>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row">

            </th>
            <td>
                <input type="submit" />
                </form>
            </td>
        </tr>
        <tr>
            <th scope="row">

            </th>
            <td>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="GDBHPL4Y24ZXQ">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </td>
        </tr>
    </table>
</div>