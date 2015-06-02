<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CodeIgniter Basic BotDetect CAPTCHA Example</title>
  <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::
    LayoutStylesheetUrl() ?>" />
  <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>
    css/style.css" />
</head>
<body>

<div id="container">
  <h1>CodeIgniter Basic BotDetect CAPTCHA Example</h1>

  <div id="body">
    <?php echo form_open('example'); ?>
    
    <label for="CaptchaCode">Please retype the characters from the image:
    </label>
    <?php echo $captchaHtml; ?>
    <input type="text" name="CaptchaCode" id="CaptchaCode" value="" size="50" 
    />
    
    <div><input type="submit" value="Submit" /></div>
    <?php echo $captchaValidationMessage; ?>

    </form>
  </div>
</div>

</body>
</html>