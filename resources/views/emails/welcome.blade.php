<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Welcome to Global Wave Capital</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f3f6fa; margin: 0; padding: 0;">

  <div style="max-width: 650px; margin: 40px auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); overflow: hidden;">
    
    <!-- Header with logo write-up -->
    <div style="background-color: #052c65; color: #ffffff; text-align: center; padding: 35px 20px;">
      <h1 style="margin: 0; font-size: 26px; font-weight: 700; letter-spacing: 1px;">
        <span style="color: #00bfff;">Global</span> Wave <span style="color: #ffffff;">Capital</span>
      </h1>
      <p style="margin: 8px 0 0; font-size: 14px; color: #cfd8e3;">
        Trusted Investment. Global Vision. Lasting Growth.
      </p>
    </div>

    <!-- Email body -->
    <div style="padding: 30px; color: #333333;">
      <p style="font-size: 16px;">Dear {{ $user->name }},</p>

      <p style="font-size: 15px; line-height: 1.6;">
        Welcome to <strong>Global Wave Capital</strong> — your trusted partner in global investment and financial growth.
      </p>

      <p style="font-size: 15px; line-height: 1.6;">
        Your account has been successfully activated, granting you full access to our trading and investment platform. 
        At Global Wave Capital, we empower investors like you to make confident financial moves that create long-term success.
      </p>

      <p style="font-size: 15px; line-height: 1.6;">
        Click below to access your dashboard and begin your journey with us:
      </p>

      <div style="text-align: center; margin: 30px 0;">
        <a href="{{ route('user.home') }}" 
           style="background-color: #0a58ca; color: #fff; text-decoration: none; padding: 12px 25px; border-radius: 6px; font-size: 15px;">
          Go to Dashboard
        </a>
      </div>

      <p style="font-size: 14px; color: #666;">
        If you have any questions, our support team is always here to help you.
      </p>

      <p style="font-size: 15px; margin-top: 25px;">Warm regards,<br><strong>The Global Wave Capital Team</strong></p>
    </div>

    <!-- Footer -->
    <div style="background-color: #f8f9fa; text-align: center; padding: 15px; font-size: 13px; color: #888;">
      © {{ date('Y') }} Global Wave Capital. All rights reserved.
    </div>

  </div>
</body>
</html>
