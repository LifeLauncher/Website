<?php
$now = strtotime("now");
$conYr = date("Y", $now);



if ($mailType == "sendmail") {

$email_temp = "
    <!DOCTYPE html>
    <html lang='en'>
      <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      </head>
      <body>
        <section style='padding-top: 50px;padding-bottom: 50px;'>
          <div class='container header' style='max-width: 600px;width: 90%;margin: 0 auto;position: relative;color: #fff;padding-left: 20px;padding-right: 20px;padding-bottom: 10px;'>
            <!-- Rocket Image Can Go Here -->
          </div>
          <div style='max-width: 600px;width: 90%;margin: 0 auto;position: relative;background-color: #2e99bc;padding: 10px 20px;color: #fff;'>
            <h3>Life Launcher</h3>
          </div>
          <div style='max-width: 600px;width: 90%;margin: 0 auto;position: relative;background-color: #FAFAFA;padding: 10px 20px;bottom: 1px solid #f0f0f0;min-height: 200px;'>
            <p style='position: relative;'>Hi <a href='mailto:".strtolower($send->email)."'>".strtolower($send->email)."</a>,</p><br>
            <p style='line-height: 2;'>Thanks for reaching out! You've been added to our mailing list, so we'll notify you with any important news or announcements. We greatly appreciate your interest in our service, so to say thanks you'll recieve priority access to our product as soon as it's available. In the meantime, you can always visit our website by clicking <a href='https://www.lifelauncher.io' target='_blank'>here</a></p><br>
            <p>Thank you!</p>
            <p>Life Launcher 🚀</p>
          </div>
          <div style='max-width: 600px;width: 90%;margin: 0 auto;position: relative;padding: 10px 20px;text-align: justify;'>
            <p style='color: #CDCDCD; font-size: 12px;'>
              You received this email because you signed up at https://www.lifelauncher.io. We'll only email you to provide information on products and release dates (don't worry, we hate spam too). Click here if you'd like to <a href='#' style='text-decoration: underline;'>unsubscribe</a>.
            </p>
            <p style='color: #CDCDCD; font-size: 12px; padding: 5px; text-align: center;'>
              © Life Launcher Inc $conYr.
            </p>
          </div>
        </section>
      </body>
    </html>
";

}
