<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif; background: #0A0A0B; color: #F0F0F5; padding: 20px;">
    <h2 style="color: #FF3D00;">New Contact Message</h2>
    <p><strong>From:</strong> {{ $data['name'] }} ({{ $data['email'] }})</p>
    <p><strong>Topic:</strong> {{ $data['topic'] }}</p>
    <hr style="border-color: #2A2A35;">
    <p>{{ $data['message'] }}</p>
</body>
</html>
