<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Status</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: 'Segoe UI', 'Helvetica Neue', Arial, sans-serif; color: #334155; line-height: 1.6;">

<table align="center" width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 40px auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);">
    <tr>
        <td style="background: linear-gradient(135deg, #4f46e5, #818cf8); padding: 35px 20px; text-align: center;">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
{{--                    @dd(storage_path('app/public/jobimage/' . $application->job->image))--}}
                    <td>
                        <img src="{{ $message->embed(storage_path('app/public/jobimage/' . $application->job->image)) }}" alt="Company Logo" style="width: 80px; height: 80px; margin-bottom: 20px; border-radius: 50%; background-color: white; padding: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <h1 style="margin: 0; font-size: 28px; color: #ffffff; font-weight: 600; letter-spacing: 0.5px;">✨ Application Update</h1>
                        <p style="margin: 8px 0 0; color: rgba(255, 255, 255, 0.9); font-size: 15px; font-weight: 300;">Your application has been reviewed</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Content Section -->
    <tr>
        <td style="padding: 40px;">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <p style="font-size: 18px; margin-bottom: 25px;">Hi <strong>{{ $application->user->name }}</strong>,</p>

                        <p style="margin-bottom: 20px;">We've finished reviewing your application for the role of:</p>

                        <p style="font-size: 20px; font-weight: 600; color: #334155; text-align: center; margin: 15px 0; padding: 15px; background-color: #f1f5f9; border-radius: 8px;">{{ $application->job->job_title }}</p>

                        <p style="margin-bottom: 20px;">at <strong>{{ $application->job->company_name }}</strong> and we're pleased to inform you that your status is:</p>

                        <table width="100%" cellpadding="0" cellspacing="0" style="margin: 30px 0;">
                            <tr>
                                <td style="text-align: center; padding: 20px; border-radius: 12px; background-color: {{ $application->status === 'approved' ? '#ecfdf5' : '#fee2e2' }};">
                                    <p style="font-size: 24px; font-weight: 700; margin: 0; color: {{ $application->status === 'approved' ? '#059669' : '#dc2626' }};">
                                        {{ strtoupper($application->status) }}
                                    </p>
                                    <p style="margin: 10px 0 0; color: {{ $application->status === 'approved' ? '#065f46' : '#991b1b' }}; font-size: 14px;">
                                        {{ $application->status === 'approved' ? 'Congratulations!' : 'Thank you for your interest' }}
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <p style="margin-bottom: 25px;">{{ $application->status === 'approved' ? 'We believe your skills and experience align well with what we\'re looking for. Our team will be in touch shortly with next steps.' : 'While we appreciate your interest, we\'ve decided to pursue other candidates whose qualifications better match our current needs.' }}</p>

                        <p style="margin-top: 25px;">If you have any questions, please don't hesitate to contact us.</p>

                        <p style="margin-bottom: 0;">Best regards,<br><strong>{{ $application->job->company_name }} Hiring Team</strong></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Divider -->
    <tr>
        <td>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="padding: 0 40px;">
                        <div style="height: 1px; background-color: #e2e8f0;"></div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Footer Section -->
    <tr>
        <td style="padding: 30px 40px;">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align: center;">
                        <p style="font-size: 14px; color: #64748b; margin-bottom: 15px;">&copy; {{ date('Y') }} {{ $application->job->company_name }} — All rights reserved</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
