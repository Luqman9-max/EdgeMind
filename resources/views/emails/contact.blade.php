<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdgeMind - New Transmission</title>
</head>
<body style="font-family: 'Courier New', Courier, monospace; background-color: #0A0A0B; color: #F0F0F5; margin: 0; padding: 40px 20px; -webkit-font-smoothing: antialiased;">
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="max-w-xl mx-auto border: 1px solid #2A2A35; background-color: #111115; max-width: 600px; margin: 0 auto;">
        <!-- Header -->
        <tr>
            <td style="padding: 20px 30px; border-bottom: 1px solid #2A2A35; background-color: #0A0A0B;">
                <div style="font-size: 10px; color: #6B6B7B; letter-spacing: 2px; text-transform: uppercase;">EDGEMIND://SECURE_CHANNEL</div>
                <h1 style="color: #FF3D00; font-size: 24px; font-weight: bold; margin: 10px 0 0 0; text-transform: uppercase; font-family: Arial, sans-serif; letter-spacing: -1px;">Signal Received</h1>
            </td>
        </tr>
        
        <!-- Metadata -->
        <tr>
            <td style="padding: 30px;">
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td style="padding-bottom: 15px;">
                            <span style="font-size: 10px; color: #6B6B7B; letter-spacing: 1px; text-transform: uppercase; display: block; margin-bottom: 4px;">>> OPERATOR_IDENTITY</span>
                            <strong style="color: #F0F0F5; font-size: 14px;">{{ $data['name'] }}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 15px;">
                            <span style="font-size: 10px; color: #6B6B7B; letter-spacing: 1px; text-transform: uppercase; display: block; margin-bottom: 4px;">>> RETURN_ADDRESS</span>
                            <a href="mailto:{{ $data['email'] }}" style="color: #00D4FF; text-decoration: none; font-size: 14px;">{{ $data['email'] }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 25px; border-bottom: 1px solid #2A2A35;">
                            <span style="font-size: 10px; color: #6B6B7B; letter-spacing: 1px; text-transform: uppercase; display: block; margin-bottom: 4px;">>> TRANSMISSION_CATEGORY</span>
                            <span style="background-color: #FF3D00; color: #0A0A0B; padding: 4px 8px; font-size: 12px; font-weight: bold; text-transform: uppercase;">{{ $data['topic'] }}</span>
                        </td>
                    </tr>
                </table>
                
                <!-- Payload -->
                <div style="margin-top: 25px;">
                    <span style="font-size: 10px; color: #6B6B7B; letter-spacing: 1px; text-transform: uppercase; display: block; margin-bottom: 10px;">>> RAW_PAYLOAD</span>
                    <div style="background-color: #0A0A0B; border: 1px solid #2A2A35; padding: 20px; font-size: 14px; line-height: 1.6; color: #F0F0F5; white-space: pre-wrap;">{{ $data['message'] }}</div>
                </div>
            </td>
        </tr>
        
        <!-- Footer -->
        <tr>
            <td style="padding: 20px 30px; border-top: 1px dashed #2A2A35; background-color: #0A0A0B; text-align: center;">
                <span style="font-size: 10px; color: #6B6B7B; letter-spacing: 2px; text-transform: uppercase;">-- END OF TRANSMISSION --</span>
            </td>
        </tr>
    </table>
</body>
</html>
